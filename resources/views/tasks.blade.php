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
    @if (count($tasks) > 0)
        …
        <tbody>
        @foreach ($tasks as $task)
            <tr>
                <!-- 任務名稱 -->
                <td class="table-text">
                    <div>{{ $task->name }} </div>
                </td>
                <td>
                    <!-- 代辦：刪除按鈕 -->
                </td>
            </tr>
        @endforeach
        </tbody>
        ….
    @endif
@endsection
