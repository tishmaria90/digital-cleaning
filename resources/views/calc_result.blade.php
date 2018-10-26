<table class="table">
    <thead>
    <tr>
        <th scope="col" colspan="2">Найменование объекта</th>
        <th scope="col" colspan="2">{{ \Auth::user()->company_name }}</th>
        <th scope="col">Дата</th>
        <th scope="col" colspan="4">{{ date('d.m.Y') }}</th>
    </tr>
    <tr>
        <th scope="col">Вид работ</th>
        <th scope="col">Площадь</th>
        <th scope="col">Персонал стоим.</th>
        <th scope="col">Подрядчики стоим.</th>
        <th scope="col">Матзатраты</th>
        <th scope="col">Накладные расходы</th>
        <th scope="col">Рентабельность %</th>
        <th scope="col">Налоги %</th>
        <th scope="col">Итого</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>Мойка остекления</td>
            <td>{{ $ploshad }}</td>
            <td>{{ $personal }}</td>
            <td>{{ $podrad }}</td>
            <td>{{ $matzatr }}</td>
            <td>{{ $naklad }}</td>
            <td>{{ \Auth::user()->recom_proc }}</td>
            <td>{{ \Auth::user()->nalog }}</td>
            <td>{{ $itogo  }}</td>
        </tr>
    </tbody>
</table>

<a class="btn btn-outline-primary" href="/save" role="button">Заказать</a>

