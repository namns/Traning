<!DOCTYPE html>
<html>
<head>
    <title>manager-post</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        border: 1px solid #e7e7e7;
        background-color: #f3f3f3;
        margin-top: 10px;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: #666;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover:not(.active) {
        background-color: #ddd;
    }

    li a.active {
        color: white;
        background-color: #4CAF50;
    }
</style>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
<body>
<div class="container">
    <div class="content">
        <ul>
            <li><a class="active" href="/user">User</a></li>
            <li><a href="/post">Post</a></li>
        </ul>