@extends('layout')
@section('content')

<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

body{
    background-image:url("https://www.nasa.gov/sites/default/files/thumbnails/image/background_03.png");
    background-repeat: no-repeat;
    background-size: cover;
    /* background: linear-gradient(-135deg, #82d5e8, #2069f1) !important; */
    font-family: "Poppins", sans-serif;
    font-weight: 300;
}

.card{
    width:350px;
    padding:10px;
    border:none;
    border-radius:20px;
    margin: auto;
}

.logo i {
    font-size: 3rem;
    color: #665A48;
}

.form-input input{
    height:45px;
    padding-right:35px;
    border:2px solid #eee;
    transition:all 0.5s;
}

.form-input input:focus{
    box-shadow:none;
    border:2px solid #000;
}

.info-text{
    font-size:14px;
}

.form-input i{
    position:absolute;
    top:47px;
    right:14px;
}

.go-button{
    border:none;
    height:50px;
    width:50px;
    font-size:29px;
    color:#fff;
    background-color:#749F82;
    border-radius:50%;
    transition:all 0.5s;
}

.go-button:hover{
    background-color:#C8DBBE;
}

/* list card */
.wrapper{
    max-width: 500px;
    border-radius: 12px;
    margin: 30px auto;
    padding: 30px;
}
.info.btn{
    padding-top: 0;
}
.fa-info,
.fa-check{
    font-size: 0.9rem;
    border-radius: 50%;
    border: 2px solid #9ab3f5;
    color: #9ab3f5;
    padding: 8px 12px;
}
.fa-info:hover,
.fa-check:hover {
    border: 2px solid #809ff5;
    color: #809ff5;
}
.h5{
    font-weight: 900;
    margin-bottom: 0;
}
p.text-muted{
    font-size: 0.98rem;
    margin: 0;
}
.work{
    position: relative;
}
.work img{
    object-fit: cover;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 3px solid #FFF;
}
#p2{
    position: absolute;
    left: 40px;
}
.fa-comment{
    transform: rotateY(180deg);
}

/* comment */
.comment{
    padding: 20px 3px;
    border-radius: 10px;
    cursor: pointer;
}
.comment:hover{
    background-color: #eff8ff;
}
.comment p.text-muted{
    font-size: 0.9rem;
}
.comment p.text-muted span{
    font-weight: 700;
}
.comment:hover .fa-arrow-right,
.comment:hover .fa-undo{
    color: #2196F3;
}

/* checkbox */
.option {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    font-size: 22px;
    cursor: pointer;
    user-select: none;
}
.option input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #fff;
    border: 2px solid #ddd;
    border-radius: 5px;
}
.option:hover input ~ .checkmark {
    background-color: #f1f1f1;
}
.option input:checked ~ .checkmark {
    border: none;
    background-color: #2196F3;
}
.checkmark:after {
    content: "\2713";
    position: absolute;
    display: none;
    color: #FFF;
}
.option input:checked ~ .checkmark:after {
    display: block;
}
.option .checkmark:after {
    left: 5px;
    top: -3px;
    width: 5px;
    height: 10px;
}

.fa-arrow-right,
.fa-undo{
    transform: rotateZ(-45deg) scale(1.1);
}
@media(max-width: 767px){
    .wrapper{
        padding: 20px;
        margin: 30px 10px;
    }
}
@media(max-width: 375px){
    .fa-info,
    .fa-check{
        font-size: 0.6rem;
        border-radius: 50%;
        border: 2px solid #9ab3f5;
        color: #9ab3f5;
        padding: 3px 5px;
    }
    .info.btn{
        padding: 2px;
        padding-top: 0px;
    }
}

/* form */
.container.content {
    max-width: 400px;
    width: 100%;
    margin: 0 auto;
    position: relative;
}
  
#create-form {
    background: #F9F9F9;
    padding: 25px;
    margin: 50px 0;
    /* opacity: ; */
    border-radius: 10px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
  
#create-form h3 {
    display: block;
    font-size: 30px;
    font-weight: 300;
    margin-bottom: 10px;
}
  
#create-form h4 {
    margin: 5px 0 15px;
    display: block;
    font-size: 13px;
    font-weight: 400;
}
  
fieldset {
    border: medium none !important;
    margin: 0 0 10px;
    min-width: 100%;
    padding: 0;
    width: 100%;
}
  
#create-form input,
#create-form textarea { 
    width: 100%;
    border: 1px solid #ccc;
    background: #FFF;
    margin: 0 0 5px;
    padding: 10px;
}
  
#create-form input:hover,
#create-form textarea:hover {
    transition: border-color 0.3s ease-in-out;
    border: 1px solid #aaa;
}
  
#create-form textarea {
    height: 100px;
    max-width: 100%;
    resize: none;
}
  
#create-form button[type="submit"],
.btn-cancel {
    cursor: pointer;
    width: 100%;
    border: none;
    color: #FFF;
    margin: 0 0 5px;
    padding: 10px;
    font-size: 15px;
    border-radius: 0 !important;
}
 
#create-form button[type="submit"] {
    background: #2caf74ea;
}

.btn-cancel {
    background: #CE1212;
}

.btn-cancel:hover {
    color: #ffff;
    background: #ff7e7e;
    transition: background-color 0.3s ease-in-out;
}

#create-form button[type="submit"]:hover {
    background: #aed3c2da;
    transition: background-color 0.3s ease-in-out;
}
  
#create-form button[type="submit"]:active {
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}
  
#create-form input:focus,
#create-form textarea:focus {
    outline: 0;
    border: 1px solid #aaa;
}

</style>

<div class="container content">  
    <form method="POST" action="{{route('todo.store')}}" id="create-form">

    @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @csrf<!-- mengambil dan mengirim data input ke controller yang nantinya di ambil oleh request $request -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>  
        @endif

      <h3>Create Todo</h3>
      
      <fieldset>
          <label for="">Title</label>
          <input  name="title" placeholder="title of todo" type="text">
      </fieldset>
      <fieldset>
          <label for="">Target Date</label>
          <input name="date" placeholder="Target Date" type="date">
      </fieldset>
      <fieldset>
          <label for="">Description</label>
          <textarea  name="description" placeholder="Type your descriptions here..." tabindex="5"></textarea>
      </fieldset>
      <br>
      <fieldset>
          <button type="submit" id="contactus-submit">Submit</button>
          <br>
      </fieldset>
      <fieldset>
          <a href="{{route('dashboard.index')}}" class="btn-cancel btn-lg btn">Cancel</a>
      </fieldset>
    
    </form>
  </div>


@endsection