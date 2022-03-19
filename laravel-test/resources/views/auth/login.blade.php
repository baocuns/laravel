</div>
<div class="form-group mb-3">
<input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
@if ($errors->has('password'))
<span class="text-danger">{{ $errors->first('password') }}</span>
@endif
</div>
<div class="form-group mb-3">
<div class="checkbox">
<label>
<input type="checkbox" name="remember"> Remember Me
</label>
</div>
</div>
<div class="d-grid mx-auto">
<button type="submit" class="btn btn-dark btn-block">Signin</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</main>
@endsection