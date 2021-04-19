<h2>Новая заявка</h2>
<h3>ФИО:  {{ $name }} </h3>
<h3>Телефон:  +{{ $phone }} </h3>
<h3>Город:  {{ $city }} </h3>
@foreach ($data as $d)
    <p>
        Вопрос: {{ $d['question'] }}
        Ответ: {{ $d['answer'] }}
    </p>
@endforeach
