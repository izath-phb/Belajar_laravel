<!-- <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->
@props(['img'])

<div>
  <div class="card" style="width: 18rem;">
    <img src="{{ $img }}" class="card-img-top" style=" width: 18rem; height: 15rem" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $judul }}</h5>
      <p class="card-text">{{ $desk }}</p>
      {{ $button }}
    </div>
  </div>
</div>