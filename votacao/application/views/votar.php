 <div class="container">
  <div class="py-5 text-left">
    </br><h2>Exerça Seu Voto</h2>
  </div>

  <div class="row">
    <div class="col-md-8 order-md-1">
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="country">Escolha a Chapa</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Selecione</option>
              <option value="">Forró Boys</option>
              <option value="">Barões da Pisadinha</option>
              <option value="">Calcinha Preta</option>
              <option value="">Pépe Moreno</option>
              <option value="">Chinelado</option>
              <option value="">Arrasta Chinela</option>
              <option value="">Sky Love do Forró</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
        </div>
        
        </br></br></br></br></br></br>

        <hr class="mb-4">
        <div class="row">
          <div class="col-md-6 mb-3">
            <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter">
              Exercer Voto
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Voto Exercido</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Voto realizado com sucesso!
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Ir para home</button>
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