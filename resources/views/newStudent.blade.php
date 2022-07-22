@extends('layouts.master')
@section('title','newStudent')
@section('content')



<html>
                <head>
                <style>
                    @import url('https://font.googleapis.com/css2?family=Poppins:wgth@200;300;400;500;600&display=swap');
                    *{
                        margin:o;
                        padding:0;
                        box-sizing:border-box;
                        font-family: 'Poppins',sans-serif;

                    }
                    body{
                        min-height: 100vh;
            
                        align-items: center;
                        justify-content: center;
                        background: #4070f4;
                       
                    }
                    .container{
                        position: relative;
                        max-width: 1000px;
                        width: 100%;
                        border-radius: 6px;
                        padding: 25px;
                        margin: 0 15px;
                        background-color: #fff;
                        box-shadow: 0 5px 10px rgba(0,0,0,0.1);
                        align-content: center;
                        transform: translate(25%);

                    }
                    .container header{
                        
                        font-size: 30px;
                        font-weight: 600p;
                        color: #333;
                        text-align: center;
                    }
                    .container header::before{
                        content: "";
                        position: absolute;
                        left:  0;
                       bottom: -2px;
                       height: 3px;
                       width: 27px;
                       border-radius: 8px;
                       background-color: #4070f4;

                    }
                    .container form{
                        position: relative;
                        margin: 25px;
                        min-height: 490px;
                        background-color: #fff;
                        

                    }
                    .container form .product{
                        margin-top: 30px;
                        font-size: 20px;

                    }
                    .container form .title{
                        display: block;
                        margin-bottom: 8px;
                        font-size: 20px;
                        font-weight: 500;
                        margin: 6px 0;
                        color: #333;
                        text-align: left;


                    }
                    .container form .fields{
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        flex-wrap: wrap;


                    }
                    form .fields .input-field{
                        display: flex;
                        width: calc(100% / 3 -15px);
                        flex-direction: column;
                        margin: 4px 0;
                        
                    }
                    .input-field label{
                        font-size: 16px;
                        font-weight: 500;
                        color: #2e2e2e;
                        text-align: left;
                        align-content: flex-start;


                    }
                    .input-field input{
                        outline: none;
                        font-size: 14px;
                        font-weight: 400;
                        color: #333;
                        border-radius: 5px;
                        border: 1px solid #aaa;
                        padding: 0 15px;
                        height: 42px;
                        margin: 8px 0;
                    }
                    .input-field input{
                        outline: none;
                        font-size: 14px;
                        font-weight: 400;
                        color: #333;
                        border-radius: 5px;
                        border: 1px solid #aaa;
                        padding: 0 15px;
                        height: 42px;
                        margin: 8px 0;
                    }
                    
                    form button:hover{
                        background-color: #265df2;
                    }
                    form .button i{
                        margin: 0 6px;
                        
                    }
                    form .buttons{
                        position: absolute;
                        left: 99%;
                        bottom: 7px;
                        transform: translate(-1440%);
                        min-width: 50px;
                        line-height: 50px;
                        font-size: 30px;
                        border-radius: 12px;
                        margin-right: 14px;

                    }
                    form .button2{
                        position: absolute;
                        left: 99%;
                        bottom: 7px;
                        transform: translate(-60%);
                        min-width: 50px;
                        line-height: 50px;
                        font-size: 40px;
                        border-radius: 12px;
                    }
                   
 
                </style>
                <title>New Product</title>
            </head>
            <body>
             <br>
                <div class="container">
                    <h1> <header>New Student</header></h1>
                
                    <form action="" method="POST">
                        @csrf
                        <div class="form first">
                            <div class="product deatils">
                            <span class="title">Add Student Deatils</span>
                                
                                <div class="fields">
                                    <div class="input-field">
                                        <label> Product Name</label>
                                            <input id="pname" type="text" placeholder="Enter Product Name" class="form-control @error('pname') is-invalid @enderror" name="pname" value="{{ old('pname') }}" required autocomplete="pname" autofocus>
                                     </div>

                                     <div class="input-field">
                                         <label> Product Category</label>
                                             <input id="pcategory" type="text" class="form-control @error('pcategory') is-invalid @enderror" name="pcategory" value="{{ old('pcategory') }}" required autocomplete="pcategory" autofocus>
                                                 
                                    </div>

                                    <div class="input-field">
                                        <label> Product Price</label>
                                            <input id="price" type="text" placeholder="Enter Product Price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
                                     </div>
                                     <div class="input-field">
                                        <label> sub category</label>
                                            <input id="subcategory" type="text" class="form-control @error('subcategory') is-invalid @enderror" name="subcategory" value="{{ old('subcategory') }}" required autocomplete="subcategory" autofocus>
                                            
                                    </div>

                                    <div class="input-field">
                                        <label> quntity</label>
                                        <input id="quntity " type="text" placeholder="Enter Product Quntity" class="form-control @error('quntity') is-invalid @enderror" name="quntity " value="{{ old('quntity ') }}" required autocomplete="quntity " autofocus>
                                    </div>
                                 

                                    
                                    <div class="input-field">
                                        <label> Product Type</label>
                                        <input id="productype" type="text" class="form-control @error('productype') is-invalid @enderror" name="productype" value="{{ old('productype') }}" required autocomplete="productype" autofocus>
                                    </div>
                                    
                                    <div class="input-field">
                                        <label> Product Type</label>
                                        <input id="productype" type="text" class="form-control @error('productype') is-invalid @enderror" name="productype" value="{{ old('productype') }}" required autocomplete="productype" autofocus>
                                    </div>

                                    <div class="input-field">
                                        <label> Product Type</label>
                                        <input id="productype" type="text" class="form-control @error('productype') is-invalid @enderror" name="productype" value="{{ old('productype') }}" required autocomplete="productype" autofocus>
                                    </div>

                                    <div class="input-field">
                                        <label> Product Type</label>
                                        <input id="productype" type="text" class="form-control @error('productype') is-invalid @enderror" name="productype" value="{{ old('productype') }}" required autocomplete="productype" autofocus>
                                    </div>

                                    <div class="input-field">
                                        <label> Product Type</label>
                                        <input id="productype" type="text" class="form-control @error('productype') is-invalid @enderror" name="productype" value="{{ old('productype') }}" required autocomplete="productype" autofocus>
                                    </div>

                                    <div class="input-field">
                                        <label> Product Type</label>
                                        <input id="productype" type="text" class="form-control @error('productype') is-invalid @enderror" name="productype" value="{{ old('productype') }}" required autocomplete="productype" autofocus>
                                    </div>

                                    <div class="input-field">
                                        <label> Product Type</label>
                                        <input id="productype" type="text" class="form-control @error('productype') is-invalid @enderror" name="productype" value="{{ old('productype') }}" required autocomplete="productype" autofocus>
                                    </div>

                                    <div class="input-field">
                                        <label> Product Type</label>
                                        <input id="productype" type="text" class="form-control @error('productype') is-invalid @enderror" name="productype" value="{{ old('productype') }}" required autocomplete="productype" autofocus>
                                    </div>

                                    <div class="input-field">
                                        <label> Product Type</label>
                                        <input id="productype" type="text" class="form-control @error('productype') is-invalid @enderror" name="productype" value="{{ old('productype') }}" required autocomplete="productype" autofocus>
                                    </div>

                                    <div class="input-field">
                                        <label> Product Type</label>
                                        <input id="productype" type="text" class="form-control @error('productype') is-invalid @enderror" name="productype" value="{{ old('productype') }}" required autocomplete="productype" autofocus>
                                    </div>

                                    <div class="input-field">
                                        <label> Product Type</label>
                                        <input id="productype" type="text" class="form-control @error('productype') is-invalid @enderror" name="productype" value="{{ old('productype') }}" required autocomplete="productype" autofocus>
                                    </div>

                                   <br>
                                    <div class="buttons">
                                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                     </div>
                                    

                                    <div class="button2">
                                        <a href="/dashboard" class="btn btn-primary float-end">Back</a>
                                          
                                        </button>
                                     </div>

                                 </div>
                        </div>
                    </div>
                </div>
                </form>
                </center>
            </body>
           </html>

@endsection