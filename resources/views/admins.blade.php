@extends('layout.master')
@section('title')
    Admin page
@endsection
@section('')
<div>
    @section('table_name')
        Admin
    @endsection
</div>
@section('table')
<table border=1>
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Chun</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Chun33</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>4chc</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Chun</td>
                    </tr>

                </tbody>
                <tfoot></tfoot>
            </table>
@endsection
