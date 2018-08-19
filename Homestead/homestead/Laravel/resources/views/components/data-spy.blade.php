<!-- Custom css that makes this example work like it does: -->
<style type="text/css" scoped="">
.scrollspy-example {
    position: relative;
    height: 500px;
    margin-top: .5rem;
    overflow: auto;
}
</style>

<!-- Actual scrollspy markup: -->
<nav id="navbar-example2" class="navbar navbar-light bg-light">
  <ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link active" href="#village1"><b>1日目</b></a></li>
    <li class="nav-item"><a class="nav-link" href="#village2"><b>2日目</b></a></li>
    <li class="nav-item"><a class="nav-link" href="#village3"><b>3日目</b></a></li>
    <li class="nav-item"><a class="nav-link" href="#village4"><b>4日目</b></a></li>
    <li class="nav-item"><a class="nav-link" href="#village5"><b>5日目</b></a></li>
    <li class="nav-item"><a class="nav-link" href="#village6"><b>6日目</b></a></li>
    <li class="nav-item"><a class="nav-link" href="#village7"><b>7日目</b></a></li>
  </ul>
</nav>
<div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="scrollspy-example">
  <h4 id="village1">村 1日目</h4>
  <p>
      @include('components.card-footer')
  </p>
  <h4 id="village2">村 2日目</h4>
  <p>
  </p>
  <h4 id="village3">村 3日目</h4>
  <p>
  </p>
  <h4 id="village4">村 4日目</h4>
  <p>
  </p>
  <h4 id="village5">村 5日目</h4>
  <p>
  </p>
  <h4 id="village6">村 6日目</h4>
  <p>
  </p>
  <h4 id="village7">村 7日目</h4>
  <p>
  </p>
</div>
