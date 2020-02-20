 <div class="container">
  <div class="py-5 text-left">
    </br><h2>Cadastre Sua Chapa</h2>
  </div>

  <div class="row">
    <div class="col-md-8 order-md-1">
      <form class="needs-validation" novalidate>
        <div class="mb-3">
          <label for="address2">Nome da Chapa</label>
          <input type="text" class="form-control" id="address2">
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="presidente">Presidente</label>
            <input type="text" class="form-control" id="presidente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="vice_presidente">Vice Presidente</label>
            <input type="text" class="form-control" id="vice_presidente" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="tg">Tesoureiro Geral</label>
            <input type="text" class="form-control" id="tg" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="t1">1° Tesoureiro</label>
            <input type="text" class="form-control" id="t1" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="sg">Secretário Geral</label>
            <input type="text" class="form-control" id="sg" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="s1">1° Secretário</label>
            <input type="text" class="form-control" id="s1" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="dci">Dir. Comunicação e Impresa</label>
            <input type="text" class="form-control" id="dci" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="del">Dir. Esportes e Lazer</label>
            <input type="text" class="form-control" id="esl" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="dcit">Dir. Cultura e Intretenimento</label>
            <input type="text" class="form-control" id="dcit" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="dsma">Dir. Saúde e Meio Ambiente</label>
            <input type="text" class="form-control" id="dsma" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>
        
        <hr class="mb-4">

        <div class="row">
          <div class="col-md-6 mb-3">
            <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter">
              Cadastrar Chapa
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Cadastro de Chapa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Chapa cadastrada com sucesso!
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                    <button type="button" class="btn btn-primary">Cadastrar Outra</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <button class="btn btn-danger btn-lg btn-block" type="submit">Cancelar</button>
          </div>
        </div>
      </form>
    </div>
  </div>