@extends('layouts.common')
@include('layouts.header')
@include('layouts.footer')
@include('layouts.submenu')
@section('title', '確認画面')
@section('content')

<div class="container">
    <div class="wrapper">
        <div class="card border-0 shadow-sm">
            <div class="row">
                <div class="col-md-12">

                    <div class="card-header">お問い合わせ</div>
                    <div class="card-body">
                        <p>誤りがないことを確認のうえ送信ボタンをクリックしてください。</p>

                        <table class="table">
                            <tr>
                                <th>お問い合わせ種類</th>
                                <td>{{ $type }}</td>
                            </tr>
                            <tr>
                                <th>お名前</th>
                                <td>{{ $contact->name }}</td>
                            </tr>
                            <tr>
                                <th>メールアドレス</th>
                                <td>{{ $contact->email }}</td>
                            </tr>
                            <tr>
                                <th>内容</th>
                                <td>{{ $contact->body }}</td>
                            </tr>
                        </table>

                        {!! Form::open(['url' => 'contact/complete',
                        'class' => 'form-horizontal',
                        'id' => 'post-input']) !!}

                        @foreach($contact->getAttributes() as $key => $value)
                        @if(isset($value))
                        @if(is_array($value))
                        @foreach($value as $subValue)
                        <input name="{{ $key }}[]" type="hidden" value="{{ $subValue }}">
                        @endforeach
                        @else
                        {!! Form::hidden($key, $value) !!}
                        @endif

                        @endif
                        @endforeach

                        {!! Form::submit('戻る', ['name' => 'action', 'class' => 'btn btn-primary']) !!}
                        {!! Form::submit('送信', ['name' => 'action', 'class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection