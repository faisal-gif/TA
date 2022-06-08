@extends('layouts.testi')
@section('content')
@foreach ($testim as $testim)
<div class="col-md-6 col-lg-3 ftco-animate align-items-stretch">
					<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">                            
						<div class="img align-self-stretch" style="background-image: url({{asset($testim->biodata->foto)}})"></div>
						</div>
						<div class="text pt-3">
							<h3><a href="instructor-details.html">{{$testim->biodata->nama}} </a></h3>
							<div class="faded">
                                <p>{{ Str::limit($testim->testimoni, 50) }}</p>
								
							</div>
						</div>
					</div>
				</div>
                @endforeach
@endsection