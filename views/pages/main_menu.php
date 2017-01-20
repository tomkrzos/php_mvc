<h2>Main menu</h2>
<p>

    <?php
    if (isset($_SESSION['userRole']) && ($_SESSION['userRole']) == "admin") {
        ?>

        <a href='?controller=quiz&action=addQuiz'
           class="btn btn-danger">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Add new quiz
        </a>

        <a href='?controller=category&action=addCategory'
           class="btn btn-danger">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Add new category
        </a>
        |

        <?php
    }
    ?>

    <a href="?controller=quiz&action=showAllQuizzes"
       class="btn btn-success">
        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
        Browse quizzes
    </a>

    <a href='?controller=score&action=currentUserScores'
       class="btn btn-primary">
        <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
        Your scores
    </a>

    <a href='?controller=ranking&action=showRanking'
       class="btn btn-warning">
        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
        Ranking
    </a>

</p>
