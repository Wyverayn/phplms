<?php
session_start();
include 'config.php';

if ($_SESSION['role'] != 'student') {
    header("Location: index.php");
    exit();
}

$quizzes = $conn->query("SELECT * FROM quizzes WHERE deadline >= NOW()");

if (isset($_POST['start_quiz'])) {
    $quiz_id = $_POST['quiz_id'];

    // Query questions based on quiz_id
    $questions = $conn->query("SELECT * FROM questions WHERE quiz_id = $quiz_id");
}

if (isset($_POST['take_quiz'])) {
    $quiz_id = $_POST['quiz_id'];
    $student_id = $_SESSION['user_id'];
    $score = 0;
    $total_items = 0;

    foreach ($_POST['answers'] as $question_id => $answer) {
        $total_items++; // Increment total items for each question
        $stmt = $conn->prepare("SELECT correct_answer FROM questions WHERE id = ?");
        $stmt->bind_param("i", $question_id);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($correct_answer);
        $stmt->fetch();

        if ($correct_answer == $answer) {
            $score++;
        }
    }

    $stmt = $conn->prepare("INSERT INTO results (student_id, quiz_id, score, total_items, submission_time) VALUES (?, ?, ?, ?, NOW())");
    $stmt->bind_param("iiii", $student_id, $quiz_id, $score, $total_items);
    $stmt->execute();
    $stmt->close();

    echo "Quiz completed! Your score: " . $score . " out of " . $total_items;
}

$results = $conn->query("SELECT q.title, r.score, r.total_items, r.submission_time FROM results r JOIN quizzes q ON r.quiz_id = q.id WHERE r.student_id = " . $_SESSION['user_id']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
</head>
<body>
<h2>Take Quiz</h2>
    <form method="post" action="">
        <select name="quiz_id">
            <?php while ($row = $quizzes->fetch_assoc()): ?>
                <option value="<?= $row['id'] ?>"><?= $row['title'] ?> (Deadline: <?= $row['deadline'] ?>)</option>
            <?php endwhile; ?>
        </select><br>
        <button type="submit" name="start_quiz">Start Quiz</button>
    </form>

    <?php if (isset($_POST['start_quiz']) && isset($questions)): ?>
        <form method="post" action="">
            <input type="hidden" name="quiz_id" value="<?= $_POST['quiz_id'] ?>">
            <?php while ($row = $questions->fetch_assoc()): ?>
                <p><?= $row['question_text'] ?></p>
                <?php
                $options = $conn->query("SELECT * FROM options WHERE question_id = " . $row['id']);
                while ($option = $options->fetch_assoc()):
                ?>
                    <input type="radio" name="answers[<?= $row['id'] ?>]" value="<?= $option['option_label'] ?>" required> <?= $option['option_label'] ?>: <?= $option['option_text'] ?><br>
                <?php endwhile; ?>
            <?php endwhile; ?>
            <button type="submit" name="take_quiz">Submit Quiz</button>
        </form>
    <?php endif; ?>

    <h2>My Results</h2>
    <table>
        <tr>
            <th>Quiz</th>
            <th>Score</th>
            <th>Total Items</th>
            <th>Date/Time Submitted</th>
        </tr>
        <?php while ($row = $results->fetch_assoc()): ?>
            <tr>
                <td><?= $row['title'] ?></td>
                <td><?= $row['score'] ?></td>
                <td><?= $row['total_items'] ?></td>
                <td><?= $row['submission_time'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
