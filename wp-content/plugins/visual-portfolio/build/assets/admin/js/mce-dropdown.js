(()=>{const{tinymce:t,VPTinyMCEData:i}=window;if(void 0!==i&&i.layouts.length){const l=[{text:"",value:""}];Object.keys(i.layouts).forEach((t=>{l.push({text:i.layouts[t].title,value:i.layouts[t].id})})),t.create("tinymce.plugins.visual_portfolio",{init(t){t.addButton("visual_portfolio",{type:"listbox",title:i.plugin_name,icon:"visual-portfolio",classes:"visual-portfolio-btn",onclick(){this.menu&&this.menu.$el.find(".mce-first").hide()},onselect(){this.value()&&t.insertContent(`[visual_portfolio id="${this.value()}"]`),this.value("")},values:l,value:""})}}),t.PluginManager.add("visual_portfolio",t.plugins.visual_portfolio)}})();