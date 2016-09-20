$(document).on("click", ".nee_media", function(e) {
            var $this = $(e.target);
            if (this.window === undefined) {
                this.window = wp.media({
                    title: 'Insert a media',
                    library: { type: 'image' },
                    multiple: false,
                    button: { text: 'Insert' }
                });

                var self = this; // Needed to retrieve our variable in the anonymous function below
                this.window.on('select', function() {

                    var first = self.window.state().get('selection').first().toJSON();
                    console.log($this.closest(".filename"));

                    
                    $this.closest(".action_plan-row").find(".file-info").show();
                    $this.closest(".action_plan-row").find(".filename").text(first.filename);
                    $this.closest(".action_plan-row").find(".ap_task_file_field").val(first.id);
                    $this.closest(".action_plan-row").find(".filesize").text(first.filesizeHumanReadable);
                    //   wp.media.editor.insert('[myshortcode id="' + first.id + '"]');
                });
            }

            this.window.open();
            return false;
        });