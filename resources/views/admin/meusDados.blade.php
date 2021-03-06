@extends('admin.partials.master')

@section('content')
    <!-- MAIN HOME -->
      <main class="main flex-grid col">
        <!-- ASIDE -->
        @include("admin.includes.aside")
        <section class="main__content content home flex-grid--wrap col calign-top">
          <!-- TOP -->
          <div class="flex-grid--row-rev--wrap col-12 calign-top mg-30--bottom">
            <!-- BREADCRUMB -->
            @include('admin.includes.breadcrumb')
            

            <!-- TITLE PAGE -->
            <h1 class="col light font-30 main-title is-sm">Dados Pessoais</h1>
            <p class="col-12 main-message">Os dados com (*) são obrigatórios.</p>
          </div>
          <!-- /TOP -->
          
          <div class="flex-grid--wrap content__box--second nopadding col-12">
            <form class="form__maquinas form flex-grid--wrap col-12 pd-10" data-type-form="default">
              <div class="flex-grid--wrap col-12">
                <span class="font-small bold mg-10--bottom">Nome</span>
                <p class="font-small col-12 color-danger hidden" data-message="Nome"></p>
                <input class="input col-12" type="text" name="" data-validate="empty" data-name="Nome"/>
              </div>
              <div class="flex-grid--wrap col-12">
                <span class="font-small bold mg-10--bottom">Email</span>
                <p class="font-small col-12 color-danger hidden" data-message="Email"></p>
                <input class="input col-12" type="text" name="" data-validate="empty" data-name="Email" />
              </div>
              <div class="flex-grid--wrap col-12">
                <span class="font-small bold mg-10--bottom">Senha</span>
                <p class="font-small col-12 color-danger hidden" data-message="Senha"></p>
                <input class="input col-12" type="password" name="" data-validate="empty" data-name="Senha" />
              </div>
              <div class="flex-grid col-12">
                <button type="submit" class="col-0 btn--second btn-nomargin is-sm mg-10--top">
                  <i class="fa fa-upload fa-left"></i>
                  Editar
                </button>
              </div>
            </form>
          </div>
        </section>
      </main>
    <!-- /MAIN HOME -->
@endsection