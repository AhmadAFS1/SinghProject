@extends('layouts.app')

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
                </div>
            </div>
          
        
            @if (Auth::user()->admin_Role=="ADMIN")
                <?php 
                    define("category", "Category: Support")  
                ?>
                <b><div class= "col-md-4"> <?php  print(category) ?> </div></b>
                <div> <a href="https://www.imdb.com/title/tt1146325/">Manage User Accounts</a> </div>
                <div> <a href="https://www.imdb.com/title/tt1146325/">Assign Roles</a></div>
                <div> <a href="https://www.imdb.com/title/tt1146325/">Help Desk</a></div>
            @endif
        
            @if (Auth::user()->admin_Role=="FINANCE_ADMIN")
                <?php 
                    define("category", "Category: Finance")  
                ?>
                <b><div class= "col-md-4"> <?php  print(category) ?> </div></b>

                <div> <a href="https://www.imdb.com/title/tt1146325/">Finance Reports</a> </div>
                <div> <a href="https://www.imdb.com/title/tt1146325/">Accounts Payable</a> </div>
                <div> <a href="https://www.imdb.com/title/tt1146325/">Accounts Recievable</a> </div>
                <div> <a href="https://www.imdb.com/title/tt1146325/">Tax</a> </div>
            @endif 

            @if (Auth::user()->admin_Role=="SALES_ADMIN")
                <?php 
                    define("category", "Category: Sales")  
                ?>
                <b><div class= "col-md-4"> <?php  print(category) ?> </div></b>

                <div> <a href="https://www.imdb.com/title/tt1146325/">Sales Reports</a> </div>
                <div> <a href="https://www.imdb.com/title/tt1146325/">Sales Leads</a> </div>
                <div> <a href="https://www.imdb.com/title/tt1146325/">Sales Demo</a> </div>
                
            @endif

            @if (Auth::user()->admin_Role=="HR_ADMIN")
                <?php 
                    define("category", "Category: Human Resources")  
                ?>
                <b><div class= "col-md-4"> <?php  print(category) ?> </div></b>

                <div> <a href="https://www.imdb.com/title/tt1146325/">New Hire On-boarding</a> </div>
                <div> <a href="https://www.imdb.com/title/tt1146325/">Benefits</a> </div>
                <div> <a href="https://www.imdb.com/title/tt1146325/">Payroll</a> </div>
                <div> <a href="https://www.imdb.com/title/tt1146325/">Off-boarding</a> </div>
                <div> <a href="https://www.imdb.com/title/tt1146325/">HR Reports</a> </div>
            
            @endif


            @if (Auth::user()->admin_Role=="TECH_ADMIN")
                <?php 
                    define("category", "Category: Technology")  
                ?>
                <b><div class= "col-md-4"> <?php  print(category) ?> </div></b>


                <div> <a href="https://www.imdb.com/title/tt1146325/">Application Monitoring</a> </div>
                <div> <a href="https://www.imdb.com/title/tt1146325/">Tech Support</a> </div>
                <div> <a href="https://www.imdb.com/title/tt1146325/">App Development</a> </div>
                <div> <a href="https://www.imdb.com/title/tt1146325/">App Admin</a> </div>
                <div> <a href="https://www.imdb.com/title/tt1146325/">Release Management</a> </div>
            
            @endif

        </div>
    </div>
</div>
@endsection
