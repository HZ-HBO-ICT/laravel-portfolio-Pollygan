<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="..\css\dashboard.css">
    <title>Dashboard</title>
</head>

<body>

<header class="navbar">
    <h1 id="name">Paolina Ganeva</h1>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a class="active" href="/dashboard">Dashboard</a></li>
            <li><a href="/faq">FAQ</a></li>
            <li><a href="/post-feed">Post feed</a></li>
        </ul>
    </nav>
</header>

<main>
    <table>
        <thead>
        <tr class="solid">
            <th>Quartile</th>
            <th>Course</th>
            <th>EC</th>
            <th>Exam</th>
            <th>Grade</th>
        </tr>
        </thead>
        <tbody>
        <tr class="solid">
            <td rowspan="3" class="num">1</td>
            <td>Programm and Career Orientation </td>
            <td>2,5</td>
            <td>Assassment</td>
            <td></td>
        </tr>
        <tr class="solid">
            <td>Computer Science Basics</td>
            <td>5</td>
            <td>Written exam</td>
            <td></td>
        </tr>
        <tr>
            <td>Programing Basics</td>
            <td>5</td>
            <td>Case study</td>
            <td></td>
        </tr>
        <tr class="solid">
            <td rowspan="2" class="num">2</td>
            <td rowspan="2">Object Oriented Programming</td>
            <td rowspan="2">10</td>
            <td>Case study</td>
            <td></td>
        </tr>
        <tr>
            <td>Project</td>
            <td></td>
        </tr>
        <tr class="solid">
            <td rowspan="4" class="num">3</td>
            <td>Framework Development 1</td>
            <td>5</td>
            <td>Case study</td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="3">Framework Project 1</td>
            <td rowspan="3">7,5</td>
            <td>Project</td>
            <td></td>

        </tr>
        <tr>
            <td>Assassment</td>
            <td></td>
        </tr>
        <tr>
            <td>Report</td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="3" class="num">4</td>
            <td rowspan="3">Framework Project 2</td>
            <td rowspan="3">10</td>
            <td>Portfolio</td>
            <td></td>
        </tr>
        <tr>
            <td>Project</td>
            <td></td>
        </tr>
        <tr>
            <td>Assassment</td>
            <td></td>
        </tr>
        <tr>
            <td class="num">The Entire Year</td>
            <td>PersonalProfessional Development</td>
            <td>12,5</td>
            <td>Portfolio</td>
            <td></td>
        </tr>
        <tr>
            <td class="num">Whenever</td>
            <td>Personality 1</td>
            <td>2,5</td>
            <td>Report</td>
            <td></td>
        </tr>
        </tbody>
    </table>
</main>

<ul class="list">
    <li style="color: green;">Green: Done</li>
    <li style="color: yellow;">Yellow: In Process</li>
    <li style="color: red;">Red: Not Done</li>
</ul>

<footer>
    <label for="credits">NBSA:</label>
    <progress value="0" max="60"></progress>

    <label for="credits">Number of credits:</label>
    <progress value="0" max="45"></progress>
</footer>

</body>
</html>
