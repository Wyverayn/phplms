<?php
session_start();
include 'config.php';

if ($_SESSION['role'] != 'student') {
    header("Location: index.php");
    exit();
}

$quizzes = $conn->query("SELECT * FROM quizzes WHERE deadline >= CURDATE()");

if (isset($_POST['take_quiz'])) {
    $quiz_id = $_POST['quiz_id'];
    $student_id = $_SESSION['user_id'];
    $score = 0;

    foreach ($_POST['answers'] as $question_id => $answer) {
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

    $stmt = $conn->prepare("INSERT INTO results (student_id, quiz_id, score) VALUES (?, ?, ?)");
    $stmt->bind_param("iii", $student_id, $quiz_id, $score);
    $stmt->execute();
    $stmt->close();

    echo "Quiz completed! Your score: " . $score;
}

if (isset($_POST['start_quiz'])) {
    $quiz_id = $_POST['quiz_id'];
    $quiz = $conn->query("SELECT * FROM quizzes WHERE id = " . $quiz_id)->fetch_assoc();
    $questions = $conn->query("SELECT * FROM questions WHERE quiz_id = " . $quiz_id);
    $timer = $quiz['timer'] * 60; // Convert minutes to seconds
}

$results = $conn->query("SELECT q.title, r.score FROM results r JOIN quizzes q ON r.quiz_id = q.id WHERE r.student_id = " . $_SESSION['user_id']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <script>
        let timer;
        let timeLeft;

        function startTimer(duration) {
            timeLeft = duration;
            timer = setInterval(countDown, 1000);
        }

        function countDown() {
            if (timeLeft <= 0) {
                clearInterval(timer);
                document.getElementById('quizForm').submit();
            } else {
                timeLeft--;
                displayTimeLeft(timeLeft);
            }
        }

        function displayTimeLeft(timeLeft) {
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            document.getElementById('timer').textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
        }

        window.addEventListener('load', function() {
            <?php if (isset($_POST['start_quiz'])): ?>
                startTimer(<?= $timer ?>);
            <?php endif; ?>
        });
    </script>
</head>
<body>
    <h2>Take Quiz</h2>
    <form method="post" action="">
        <select name="quiz_id">
            <?php while ($row = $quizzes->fetch_assoc()): ?>
                <option value="<?= $row['id'] ?>"><?= $row['title'] ?></option>
            <?php endwhile; ?>
        </select><br>
        <button type="submit" name="start_quiz">Start Quiz</button>
    </form>

    <?php if (isset($_POST['start_quiz'])): ?>
        <h3>Time left: <span id="timer"><?= $quiz['timer'] ?>:00</span></h3>
        <form method="post" action="" id="quizForm">
            <input type="hidden" name="quiz_id" value="<?= $quiz_id ?>">
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
        </tr>
        <?php while ($row = $results->fetch_assoc()): ?>
            <tr>
                <td><?= $row['title'] ?></td>
                <td><?= $row['score'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
