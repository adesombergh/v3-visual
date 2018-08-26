	<?php include_once 'modal.php'; ?>
	<?php modal(function(){ ?>
<div class="box modal-box">
	<p class="modal-title">
		Compta
	</p>
	<div class="box">
		<div class="content">
            <div class="level">
                <div class="level-item">
                    <div class="tags has-addons">
                        <span class="tag is-light">
                            <span class="icon"><i class="fa fa-bank"></i></span>
                            <span class="is-hidden-touch">BANQUE</span>
                        </span>
                        <span class="tag is-link">6.590,10 €</span>
                    </div>
                </div>
                <div class="level-item">
                    <div class="tags has-addons">
                        <span class="tag is-light">
                            <span class="icon"><i class="fa fa-volume-up"></i></span>
                            <span class="is-hidden-touch">DECLARE</span>
                        </span>
                        <span class="tag is-link">17.730,40 € / 62%</span>
                    </div>
                </div>
                <div class="level-item">
                    <div class="tags has-addons">
                        <span class="tag is-light">
                            <span class="icon"><i class="fa fa-money"></i></span>
                            <span class="is-hidden-touch">SOLDE</span>
                        </span>
                        <span class="tag is-link">9.650,9 €</span>
                    </div>
                </div>
            </div>
			Coucou
			<div class="bd-example" style="position: relative;">
				<input id="sliderWithValueTooltip" class="slider has-output-tooltip is-fullwidth is-link is-circle" min="0" max="100" value="50" step="5" type="range">
				<output for="sliderWithValueTooltip"></output>
			</div>
		</div>
	</div>
</div>
<script>
// Find output DOM associated to the DOM element passed as parameter
function findOutputForSlider( element ) {
	 var idVal = element.id;
	 outputs = document.getElementsByTagName( 'output' );
	 for( var i = 0; i < outputs.length; i++ ) {
		 if ( outputs[ i ].htmlFor == idVal )
			 return outputs[ i ];
	 }
}

function getSliderOutputPosition( slider ) {
	// Update output position
	var newPlace, minValue;

	var style = window.getComputedStyle( slider, null );
	sliderWidth = parseInt( style.getPropertyValue( 'width' ), 10 );

	if ( !slider.getAttribute( 'min' ) ) {
		minValue = 0;
	} else {
		minValue = slider.getAttribute( 'min' );
	}
	var newPoint = ( slider.value - minValue ) / ( slider.getAttribute( 'max' ) - minValue );
	if ( newPoint < 0 ) {
		newPlace = 0;
	} else if ( newPoint > 1 ) {
		newPlace = sliderWidth;
	} else {
		newPlace = sliderWidth * newPoint;
	}
	return {
		'position': newPlace + 'px'
	}
}

document.addEventListener( 'DOMContentLoaded', function () {
	// Get all document sliders
	var sliders = document.querySelectorAll( 'input[type="range"].slider' );
	[].forEach.call( sliders, function ( slider ) {
		var output = findOutputForSlider( slider );
		if ( output ) {
			var newPosition = getSliderOutputPosition( slider );
            output.style[ 'left' ] = newPosition.position;
            output.style[ 'transform' ] = "translate(-50%)";
            output.value = slider.value;

			slider.addEventListener( 'input', function( event ) {
				var newPosition = getSliderOutputPosition( event.target );
				output.style[ 'left' ] = newPosition.position;
				output.value = event.target.value;
			} );
		}
	} );
} );
</script>
	<?php }); ?>