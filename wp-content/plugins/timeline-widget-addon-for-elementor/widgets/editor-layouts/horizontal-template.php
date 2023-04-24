= 1 && settings.twae_icon_position.size  50 && settings.twae_icon_position.size  60){
    twae_icon_position='twae-position-60-plus';
}else{
    twae_icon_position='twae-position-40-50';
}


#>

<div id="twae-wrapper-{{{widgetId}}}" class="twae-wrapper twae-horizontal-timeline">
<div class="twae-wrapper-inside">
    <div class="twae-slider-container swiper-container" data-dir="" data-slidestoshow="{{{slideToShow}}}" data-autoplay="{{{autoplay}}}">

    <div class="twae-slider-wrapper swiper-wrapper {{{slideHeight}}}">
    
            
            <div class="swiper-slide twae-repeater-item twae-story {{{twae_icon_position}}}">	
            <div class="twae-story-line"></div>
            
                        <div class="twae-year twae-year-container">
                            <div class="twae-year-label twae-year-text">{{{ item.twae_year }}}</div>
                        </div>
                
                   
                    <div class="twae-labels">
                        <div class="twae-label-big">{{{ item.twae_date_label }}}</div>
                       
                        
                        <div class="twae-label-small">{{{ item.twae_extra_label }}}</div>
                        

                    </div>	
                    <div class="twae-arrow"></div>	
                    
                    <div class="twae-icon">
                      
                            {{{ twae_iconHTML.value }}}
                        
                            <i aria-hidden="true" class="far fa-clock"></i>
                         
                      </div>
                    
                         <div class="twae-icondot"></div>
                        

                    <div class="twae-content">
                              
                        <div class="twae-media  {{{timeline_image.size}}}"><img src="{{{ image_url }}}"></div>
                                
                        <div class="twae-title">{{{ item.twae_story_title}}}</div>
                        <div class="twae-description">{{{ item.twae_description }}}</div>
                    </div>
            </div>

    </div>
</div>
</div>
    <!-- Add Pagination -->        
    <!-- Add Arrows -->
            <div class="twae-button-prev"><i class="fas fa-chevron-left"></i></div>
            <div class="twae-button-next"><i class="fas fa-chevron-right"></i></div>
            <div class="twae-h-line"></div>
            <div class="twae-line-fill"></div>
</div>