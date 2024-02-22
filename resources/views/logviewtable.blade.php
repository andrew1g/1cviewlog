
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div>
        <div>                            
        <h2>ЛОГ использования отчетов и обработок 1с</h2>

<table>
  <tr>
    <th>id</th>
    <th>ts</th>
    <th>username</th>
    <th>system</th>
    <th>path</th>
    <th>from_path</th>
  </tr>
 <section class="links">
            @foreach ($logs as $log)
            <tr>
                <td>{{ $log->id }}</td>
                <td>{{ $log->ts }}</td>
                <td>{{ $log->username }}</td>
                <td>{{ $log->system }}</td>
                <td>{{ $log->path }}</td>
                <td>{{ $log->from_path }}</td>                
            </tr>              
            @endforeach
 </section>
</table>
        </div>
    </div>
    


                
</x-app-layout>

<!-- <!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>ЛОГ использования отчетов и обработок 1с</h2>

<table>
  <tr>
    <th>id</th>
    <th>ts</th>
    <th>username</th>
    <th>system</th>
    <th>path</th>
    <th>from_path</th>
  </tr>
 <section class="links">
            @foreach ($logs as $log)
            <tr>
                <td>{{ $log->id }}</td>
                <td>{{ $log->ts }}</td>
                <td>{{ $log->username }}</td>
                <td>{{ $log->system }}</td>
                <td>{{ $log->path }}</td>
                <td>{{ $log->from_path }}</td>                
            </tr>              
            @endforeach
 </section>
</table>

</body>
</html> -->
