@extends('layouts.app')

@section('content')

  <div class="prose ml-4 mb-4">
    <h2 class="text-lg">タスク一覧</h2>
  </div>

  @if (isset($tasks))
    <table class="table table-zebra w-full my-4">
      <thead>
        <tr>
          <th>id</th>
          <th>タスク</th>
          <th>ステータス</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tasks as $task)
          <tr>
            <td><a class="link link-hover text-info" href="{{ route('tasks.show',['task' => $task-> id]) }}">{{ $task->id}}</a></td>
            <td>{{ $task->content }}</td>
            <td>{{ $task->status }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif

  {{-- メッセージ作成ページへのリンク --}}
  <a class="btn btn-primary" href="{{ route('tasks.create') }}">新規作成</a>

@endsection