<?php
@extends('layouts.app')

@section('content')
    …
    <!-- 顯示驗證錯誤 -->
    @include('common.errors')

    <!-- 新任務的表單 -->
    <form action="/task" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        …
        …
        <input type="text" name="name" id="task-name" … >
        …
    </form>
    <!-- 目前任務 -->
    …
@endsection
