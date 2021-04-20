@extends('layout.app')

@section('content')
<!-- ======= Hero Section ======= -->
<!-- ======= Appointment Section ======= -->
<section id="appointment" class="appointment section-bg" style="margin-top:130px">
      <div class="container">

        @if ($errors->any())
            <div class="row text-center">
                <div class="col-md-4"></div>
                <div class="alert alert-danger col-md-4" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error  }} </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <div class="section-title">
          <h2>Cadastrar Medicos</h2>
          <p>Cadastrar os medicos a serem vinculadas as anamneses.</p>
        </div>

        <form action="{{ route('medicos.save') }}" method="post" role="form" class="php-email-form">
        @csrf    
        <div class="row">
                <div class="col-md-3 form-group">
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome Completo" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                        </div>
                    <div class="col-md-3 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Telefone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-3 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" name="crm" id="crm" placeholder="CRM" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-3 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                </div>
            </row>
            <div class="row">
                <div class="col-md-2 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>

                    <div class="col-md-4 form-group">
                        <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Endereco" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    
                    <div class="col-md-3 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>

                    <div class="col-md-3 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                </div>
            </row>
          <div class="text-center"><button type="submit">Cadastrar Medico</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->
@endsection