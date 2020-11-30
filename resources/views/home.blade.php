@extends('layouts.app')
<title>Assignment</title>
<style>
.myDiv {
border: 5px outset red;
background-color: lightblue;
text-align: center;
}
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}



            @if (Auth::user()->admin_Role=="ADMIN")
                <?php
                    define("category", "Category: Support")
                ?>
                <b><div class= "col-md-4"> <?php  print(category) ?> </div></b>

                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="Manage User Accounts" />
                    <div> <b> </div>
                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="Assign Roles" />
                    <div> <b> </div>
                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="Help Desk" />

            @endif

            @if (Auth::user()->admin_Role=="FINANCE_ADMIN")
                <?php
                    define("category", "Category: Finance")
                ?>
                <b><div class= "col-md-4"> <?php  print(category) ?> </div></b>
                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="Finance Reports" />
                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="Accounts Payable" />
                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="Accounts Recievable" />
                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="Tax" />


            @endif

            @if (Auth::user()->admin_Role=="SALES_ADMIN")
                <?php
                    define("category", "Category: Sales")
                ?>
                <b><div class= "col-md-4"> <?php  print(category) ?> </div></b>

                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="Sales Reports" />
                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="Sales Leads" />
                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="Sales Demo" />

            @endif

            @if (Auth::user()->admin_Role=="HR_ADMIN")
                <?php
                    define("category", "Category: Human Resources")
                ?>
                <b><div class= "col-md-4"> <?php  print(category) ?> </div></b>
                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="New Hire On-Boarding" />
                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="Benefits" />
                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="Payroll" />
                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="Off-Boarding" />
                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="HR Reports" />


            @endif


            @if (Auth::user()->admin_Role=="TECH_ADMIN")
                <?php
                    define("category", "Category: Technology")
                ?>
                <b><div class= "col-md-4"> <?php  print(category) ?> </div></b>

                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="Application Monitoring" />
                    <div> </b> </div>
                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="Tech Support" />
                    <div> </b> </div>
                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="App Development" />
                    <div> </b> </div>
                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="App Admin" />
                    <div> </b> </div>
                    <input type="button" onclick="location.href='https://www.imdb.com/title/tt1146325';" value="Release Management" />


            @endif

        </div>
    </div>
</div>
@endsection
