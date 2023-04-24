<div id="twae-wrapper-{{{widgetId}}}" class="twae-vertical twae-wrapper {{{ timeline_layout_wrapper }}}">
    <div class="twae-start"></div>
    <div class="twae-timeline">
        

            
                        <div class="twae-year twae-year-container">
                            <div class="twae-year-label twae-year-text">{{{ item.twae_year }}}</div>
                        </div>
                
            <div id="story-{{{story_id}}}" class="twae-story twae-repeater-item {{{ story_alignment }}} {{{ iconCls}}}">									
                    <div class="twae-labels">
                        <div view.getrenderattributestring date_label_key>{{{ item.twae_date_label }}}</div>
                        <div view.getrenderattributestring extra_label_key>{{{ item.twae_extra_label }}}</div>
                    </div>
                    
                        <div class="twae-icondot"></div>
                    
                        <div class="twae-icon">
                        
                                {{{ twae_iconHTML.value }}}
                            
                                <i aria-hidden="true" class="far fa-clock"></i>
                              
                      </div>
                    

                    <div class="twae-arrow"></div>
                    <div class="twae-content">
                        <div view.getrenderattributestring title_key>{{{ item.twae_story_title}}}</div>
                        
                            <div class="twae-media {{{timeline_image.size}}}"><img src="{{{ image_url }}}"></div>
                        
                        <div view.getrenderattributestring description_key>{{{ item.twae_description }}}</div>
                    </div>
              
            </div>
            
        </div>
        <div class="twae-end"></div>
    </div>