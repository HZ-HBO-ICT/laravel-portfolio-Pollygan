@extends('layout')
@section('head')
    <link rel="stylesheet" href="..\css\dashboard.css">
    <title>Dashboard</title>
@endsection
@section('header')

@endsection
@section('content')
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
                <td rowspan="5" class="num">1</td>
                <!--It is usually the folder and the name of the table-->
                @foreach($grades as $grade)
                <td>{{$grade->course_name}}</td>
                <td>{{$grade->EC}}</td>
                <td>{{$grade->test_name}}</td>
                <td>{{$grade->best_grade}}</td>
            </tr>
            @endforeach
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
        <ul class="list">
            <li style="color: green;">Green: Done</li>
            <li style="color: yellow;">Yellow: In Process</li>
            <li style="color: red;">Red: Not Done</li>
        </ul>
@endsection
@section('footer')

        <label for="credits">NBSA:</label>
        <progress value="0" max="60"></progress>

        <label for="credits">Number of credits:</label>
        <progress value="0" max="45"></progress>

@endsection
