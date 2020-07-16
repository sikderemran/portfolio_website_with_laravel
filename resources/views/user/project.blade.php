<div id="my_works">
		<div class="container description">
			<div class="row">
				<div class="col-100">
					<div class="move_text wow fadeInDown" data-wow-delay="0.2s">
						<div class="line">
							<h2>My projects</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="work_image">
				<div class="row" id="show_more">
					@foreach($project_data as $project_d)
					<div class="col-25">
						<div class="hovereffect wow fadeInDown" data-wow-delay="0.2s">
							<img id="load_image" src="{{asset('assets/backend/images/'.$project_d->image)}}">
							<div class="overlay">
					           <h2>{{$project_d->title}}</h2>
					           <a class="info" href="{{$project_d->url}}" target="blank">View</a>
					        </div>
						</div>
					</div>
					@php 
						$i=$project_d->id
					@endphp
					@endforeach
				</div>
			</div>
			<div class="row">
				<div class="col-100">
					<div class="load_more">
					@php
						$count=$project_data->count();
					@endphp
					@if($count>=1)
					<form method="get" action="" id="load_more">
						@csrf
						<input name="more_data" style="display:none" id="load_more_value" value="{{$i}}">
						<button id="load_more_button">Load More</button>
					</form>
					@endif
					</div>
				</div>
			</div>
		</div>
	</div>