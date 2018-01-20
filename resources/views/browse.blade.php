@extends('layouts.app')

@section('content')
	<section class="works text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Sattalites</h2>
					<ul class="list-inline">
                                            <li class="filter active" data-filter=".all">All</li>
                                            @foreach($categories as $k => $cat)
                                                <li class="filter" data-filter=".{{$cat->title}}">{{$cat->title}}</li>
                                            @endforeach
					</ul>
				</div>
				 @foreach($sattalite as $k => $v)
                                     <div class="col-md-4 col-sm-6 mix {{$v->categoryType->title}} all" data-myorder="2" style="margin-bottom: 20px;">
						<div class="single-work">
							<img src="{{asset( '/images/sattalites/'.$v->image)}}" alt="{{ URL::to('browse/'.$v->id) }}">
							<div class="overlay">
								<h3>{{$v->title}}</h3>
								<a href="{{ URL::to('browse/'.$v->id) }}" type="button" ><i class="fa fa-search-plus"></i></a>
							</div>
						</div>
                                                {{$v->title}}
					</div>
				 @endforeach
			</div>
		</div>
	</section><!-- end of portfolios -->
 
@endsection
