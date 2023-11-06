@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss='alert'>&times;</button>
    <strong>Erreur!</strong> {{ $error }}
</div>
@endforeach
@endif

@if (session('error'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss='alert'>&times;</button>
    <strong>Erreur!</strong> {{ session('error') }}
</div>
@endif

@if (session('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss='alert'>&times;</button>
    <strong>Bon!</strong> {{ session('success') }}
</div>
@endif

<script>
  // Fonction pour cacher l'alerte après 2 secondes
  $(document).ready(function() {
    setTimeout(function() {
      $(".alert").addClass("d-none");
    }, 2000); // 2000 millisecondes = 2 secondes
  });
</script>
