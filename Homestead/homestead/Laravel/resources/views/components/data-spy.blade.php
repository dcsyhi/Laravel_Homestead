<!-- Custom css that makes this example work like it does: -->
<style type="text/css" scoped="">
.scrollspy-example {
    position: relative;
    height: 5000px;
    margin-top: .5rem;
    overflow: auto;
}
</style>

<!-- Actual scrollspy markup: -->
<nav id="navbar-example2" class="navbar navbar-light bg-light">
  <ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link active" href="#village1">1日目</a></li>
    <li class="nav-item"><a class="nav-link" href="#village2">2日目</a></li>
    <li class="nav-item"><a class="nav-link" href="#village3">3日目</a></li>
    <li class="nav-item"><a class="nav-link" href="#village4">4日目</a></li>
    <li class="nav-item"><a class="nav-link" href="#village5">5日目</a></li>
    <li class="nav-item"><a class="nav-link" href="#village6">6日目</a></li>
    <li class="nav-item"><a class="nav-link" href="#village7">7日目</a></li>
  </ul>
</nav>
<div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="scrollspy-example">
  <h4 id="village1">1日目</h4>
  <p>
      @include('components.card-footer')
  </p>
  <h4 id="village2">2日目</h4>
  <p>
      @include('components.card-footer')
  </p>
  <h4 id="village3">3日目</h4>
  <p>
      @include('components.card-footer')
  </p>
  <h4 id="village4">4日目</h4>
  <p>
      @include('components.card-footer')
  </p>
  <h4 id="village5">5日目</h4>
  <p>
      @include('components.card-footer')
  </p>
  <h4 id="village6">6日目</h4>
  <p>
      @include('components.card-footer')
  </p>
  <h4 id="village7">7日目</h4>
  <p>
      @include('components.card-footer')
  </p>
</div>
