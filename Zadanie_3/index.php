<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подбор сотрудников</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Система подбора сотрудников</h1>
        <nav>
            <!-- Кнопка "Профиль" -->
            <a href="php/check_profile.php" class="profile-button">Профиль</a>
        </nav>
    </header>
    <main>
        <section>
            <h2>Добро пожаловать!</h2>
            <p>Здесь вы можете создать профиль компании, разместить вакансии и найти подходящих кандидатов.</p>
        </section>

        <!-- Список вакансий -->
        <section>
            <h2>Список вакансий</h2>
            <?php
            include 'php/db.php';

            try {
                $stmt = $pdo->query("SELECT vacancies.id, vacancies.title, vacancies.description, companies.name AS company_name 
                                     FROM vacancies 
                                     INNER JOIN companies ON vacancies.company_id = companies.id");

                $vacancies = $stmt->fetchAll();

                if (empty($vacancies)) {
                    echo "<p>Нет доступных вакансий.</p>";
                } else {
                    echo "<ul>";
                    foreach ($vacancies as $vacancy) {
                        echo "<li>";
                        echo "<strong>" . htmlspecialchars($vacancy['title']) . "</strong><br>";
                        echo "Компания: " . htmlspecialchars($vacancy['company_name']) . "<br>";
                        echo "Описание: " . htmlspecialchars($vacancy['description']) . "<br>";
                        echo "</li>";
                    }
                    echo "</ul>";
                }
            } catch (PDOException $e) {
                echo "<p>Произошла ошибка при загрузке вакансий.</p>";
            }
            ?>
        </section>
    </main>
</body>
</html>