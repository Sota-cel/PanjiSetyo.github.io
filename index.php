<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="container">
        <img src="Profil2.jpg" alt="Profile Picture" class="profile-picture">

        <h1>Panji Setyo Nugroho</h1>
        <p class="details">102022400036 / Rekayasa Industri / Sistem Informasi</p>

        <div class="social-links">
            <a href="https://x.com/sisimbol" target="_blank">
                <img src="https://simpleicons.org/icons/x.svg" alt="X Icon">
            </a>
            <a href="https://github.com/Sota-cel" target="_blank">
                <img src="https://simpleicons.org/icons/github.svg" alt="Github Icon">
            </a>
            <a href="https://www.instagram.com/jiji_panji/" target="_blank">
                <img src="https://simpleicons.org/icons/instagram.svg" alt="Instagram Icon">
            </a>
        </div>
        
        <table class="info-table">
            <tr>
                <th>Skill</th>
                <th>Proficiency</th>
            </tr>
            <tr>
                <td>HTML</td>
                <td>Intermediate</td>
            </tr>
            <tr>
                <td>CSS</td>
                <td>Beginner</td>
            </tr>
        </table>
        
        <div id="datetime-container" class="datetime"></div>
    </div>

    <script>
        function updateTime() {
            const now = new Date();
            const datetimeString = now.toLocaleString('id-ID', { dateStyle: 'full', timeStyle: 'medium' });
            document.getElementById('datetime-container').textContent = datetimeString;
        }
        setInterval(updateTime, 1000);
        updateTime();
    </script>

</body>
</html>