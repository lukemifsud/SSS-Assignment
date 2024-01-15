<div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="model" class="col-md-3 col-form-label">Model</label>
                      <div class="col-md-9">
                        <input type="text" name="model" id="model" value="{{ old('model', $cars->model) }}"  class="form-control @error('model') is-invalid @enderror">
                        @error('model')
                        <div class="invalid-feedback">
                          {{ $message }} 
                        </div>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="year" class="col-md-3 col-form-label">Year</label>
                      <div class="col-md-9">
                        <input type="text" name="year" id="year" value="{{ old('year', $cars->year) }}" class="form-control @error('year') is-invalid @enderror">
                        @error('year')
                        <div class="invalid-feedback">
                          {{ $message }} 
                        </div>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="salesperson_email" class="col-md-3 col-form-label">Salesperson Email</label>
                      <div class="col-md-9">
                        <input type="text" name="salesperson_email" id="salesperson_email" value="{{ old('salesperson_email', $cars->salesperson_email) }}" class="form-control @error('salesperson_email') is-invalid @enderror">
                        @error('salesperson_email')
                        <div class="invalid-feedback">
                          {{ $message }} 
                        </div>
                        @enderror
                      </div>
                    </div>

                    
                    <div class="form-group row">
                      <label for="manufacturers_id" class="col-md-3 col-form-label">Manufacturer</label>
                      <div class="col-md-9">
                        <select name="manufacturers_id" id="manufacturers_id" class="form-control @error('manufacturers_id') is-invalid @enderror"">
                          @foreach ($manufacturers as $id => $name)  
                            <option {{ $id == old('manufacturers_id', $cars->manufacturers_id) ? 'selected': ''}} value="{{ $id }}">{{ $name }}</option>
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
                          <a href="{{ route('cars.index') }}" class="btn btn-outline-secondary">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>