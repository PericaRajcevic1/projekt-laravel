@extends('layouts.app')
@section ('content')
  <section>
  <link href="css/contact.css" rel="stylesheet" />
	
  <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="auto-form-wrapper">
    
        {!! Form::open(['route'=>'contact.submit'])!!}
			<div class="wrap-contact2">
				<form class="contact2-form validate-form">
					<span class="contact2-form-title">
						Kontaktirajte nas!
					</span>

					@if(Session::has('message'))
                    <div class="alert alert-success">
                    {{Session('message')}}
                    </div>
                    @endif
               
					<div class="wrap-input2 validate-input" data-validate="Potrebno je unijeti ime!">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="IME"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Molimo vas unesite validan email: vas@email.com">
						<input class="input2" type="text" name="email">
						<span class="focus-input2" data-placeholder="EMAIL"></span>
					</div>

					
					
					<label for="choose-select"  >Vrsta kontakta:</label>
					<br>
					
					<select name="choose" id="choose-select">
    				<option value="">--Odaberite jedan od odgovora--</option>
    				<option value="question">Pitanje</option>
    				<option value="buy">Narudžba</option>
    				
					</select>
					

					<div class="row justify-content-left">
        			<div class="col-xl-10"></div>
       				<div class="form-group col-md-8">
           			<label for="document">Vaš file:</label>
              		<input type="file" class="form-control" name="document">
        			</div>
					</div>
					

					<div class="wrap-input2 validate-input" data-validate = "Mjesto za poruku je prazno!">
						<textarea class="input2" name="message"></textarea>
						<span class="focus-input2" data-placeholder="PORUKA"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn">
								POŠALJI
							</button>
						</div>
					</div>
                {!!Form::close()!!}
			</div>
		</div>
	</div>
		</div>
    		</div>
   				 </div>
   					 </div>
               
</section>
@endsection