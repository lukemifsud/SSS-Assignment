<div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="first_name" class="col-md-3 col-form-label">Model</label>
                      <div class="col-md-9">
                        <input type="text" name="first_name" id="first_name" class="form-control @error('model') is-invalid @enderror">
                        @error('model')
                        <div class="invalid-feedback">
                          {{ $message }} 
                        </div>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="last_name" class="col-md-3 col-form-label">Year</label>
                      <div class="col-md-9">
                        <input type="text" name="last_name" id="last_name" class="form-control @error('year') is-invalid @enderror">
                        @error('year')
                        <div class="invalid-feedback">
                          {{ $message }} 
                        </div>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Salesperson Email</label>
                      <div class="col-md-9">
                        <input type="text" name="email" id="email" class="form-control @error('salesperson_email') is-invalid @enderror">
                        @error('salesperson_email')
                        <div class="invalid-feedback">
                          {{ $message }} 
                        </div>
                        @enderror
                      </div>
                    </div>

                    
                    <div class="form-group row">
                      <label for="company_id" class="col-md-3 col-form-label">Manufacturer</label>
                      <div class="col-md-9">
                        <select name="company_id" id="company_id" class="form-control @error('manufacturers_id') is-invalid @enderror"">
                          @foreach ($manufacturers as $id => $name)  
                            <option value="{{ $id }}">{{ $name }}</option>
                          @endforeach
                          
                          
                        </select>
                        @error('manufacturers_id')
                        <div class="invalid-feedback">
                          {{ $message }} 
                        </div>
                        @enderror
                      </div>
                    </div>
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <a href="index.html" class="btn btn-outline-secondary">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>