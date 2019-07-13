@extends('master')

@section('title')
		Mi perfil: {{$user->name}}
@endsection
<?php
//dd($user);
?>

@section('main')
<main>
		<div class ="container">
		<section id="section-contact">
				<div class="contain-contact">
					<div id="section-forms">
						<div class="formulario">
							
								<h1 id="section-register">Bienvenide {{$user->name}}</h1>
								<h3>Actualizá tus datos</h3>
						<form action="/profile" method="POST" class="tarjets" enctype="multipart/form-data">
							{{ csrf_field() }}
								<div class="form-group row">
										<label for="foto_perfil" class="col-md-4 col-form-label text-md-right">Foto de Perfil</label>

										<img src="/storage/foto_perfil/{{$user->foto_perfil}}" class="avatar-profile" alt="foto de perfil">
										<div class="col-md-6">
												<input id="foto_perfil" type="file" class="form-control" name="foto_perfil">
										</div>
								</div>
							
								
									<div class="form-group">
										<label for="name">Nombre</label>
										<input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
									</div>
									@if ($errors->has('name'))
                    <span class="errores">{{ $errors->first('name') }}</span>
                  @endif
								
									<div class="form-group">
											<label for="lastName">Apellido</label>
											<input type="text" class="form-control" id="lastName" name="lastName" value="{{$user->lastName}}">
									</div>
									@if ($errors->has('lastName'))
                    <span class="errores">{{ $errors->first('lastName') }}</span>
                  @endif
								
									<div class="form-group">
									<label for="gender">Género:</label><br>
									<?php if(isset($errores["gender"]) && $errores["gender"]=="fem"):?>
										<input type="radio" name="gender" value="fem" checked>Femenino
									<?php else:?>
										<input type="radio" name="gender" value="fem">Femenino
									<?php endif?>
									<?php if (isset($_POST["gender"]) && $_POST["gender"] == "masc"): ?>
										<input type="radio" name="gender" value="masc" checked>Masculino
									<?php else:?>
										<input type="radio" name="gender" value="masc">Masculino
									<?php endif?>
									<?php if (isset($_POST["gender"]) && $_POST["gender"] == "other"): ?>
										<input type="radio" name="gender" value="other" ckecked>Prefiero no decirlo
									<?php else:?>                      
										<input type="radio" name="gender" value="other">Prefiero no decirlo
									<?php endif?>
									<?php if(isset($errores["gender"])):?>
										<span class="errores"><?= $errores["gender"] ?></span>
								<?php endif?>
									</div>

									<h3>Actualizá tu email:</h3>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{$user->email}}">
									</div>
									<div class="form-group">
										<label for="email2">Repetí tu email</label>
										<input type="email" class="form-control" id="email2" name="email2" aria-describedby="emailHelp" value="{{$user->email}}">
									</div>
									@if ($errors->has('name'))
                    <span class="errores">{{ $errors->first('name') }}</span>
									@endif
									
								<h3>Actualizá tu contaseña:</h3>
									<div class="form-group">
										<label for="pass">Contraseña actual</label>
										<input type="password" class="form-control" id="pass" name="pass" maxlength="20" tabindex="17" autocapitalize="none" spellcheck="false" autocorrect="off" autocomplete="off" data-uid="5">
									</div>
									@if ($errors->has('pass'))
                    <span class="errores">{{ $errors->first('pass') }}</span>
                  @endif
									<div class="form-group">
										<label for="pass2">Nueva contraseña</label>
										<input type="password" class="form-control" id="pass2" name="pass2" maxlength="20" tabindex="17" autocapitalize="none" spellcheck="false" autocorrect="off" autocomplete="off" data-uid="5">
									</div>
									@if ($errors->has('pass2'))
                    <span class="errores">{{ $errors->first('pass2') }}</span>
                  @endif
									<div class="form-group">
										<label for="pass3">Repetí la contraseña nueva</label>
										<input type="password" class="form-control" id="pass3" name="pass3" maxlength="20" tabindex="17" autocapitalize="none" spellcheck="false" autocorrect="off" autocomplete="off" data-uid="5">
									</div>
									@if ($errors->has('pass3'))
                    <span class="errores">{{ $errors->first('pass3') }}</span>
                  @endif
									<button type="submit" name="" value="" class="btn-standard">Actualizar</button>
									{{-- @dd($errors->all()); --}}
								</form>
						</div>
					</div>
				</div>
			</section>
		</main>
@endsection