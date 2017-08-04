$(function() {
    $(".navbar-expand-toggle").click(function() {
        $(".app-container").toggleClass("expanded");
        return $(".navbar-expand-toggle").toggleClass("fa-rotate-90");
    });
    return $(".navbar-right-expand-toggle").click(function() {
        $(".navbar-right").toggleClass("expanded");
        return $(".navbar-right-expand-toggle").toggleClass("fa-rotate-90");
    });
});

// $(function() {
//     return $('select').select2();
// });

$(function() {
    return $('.toggle-checkbox').bootstrapSwitch({
        size: "small"
    });
});

$(function() {
    return $('.match-height').matchHeight();
});

$(function() {
    if ($('.datatable').length >= 1) {
        return $('.datatable').DataTable({
            "dom": '<"top"fl<"clear">>rt<"bottom"ip<"clear">>'
        });
    }
});

$(function() {
    return $(".side-menu .nav .dropdown").on('show.bs.collapse', function() {
        return $(".side-menu .nav .dropdown .collapse").collapse('hide');
    });
});

$(function() {
    if ($('.datepicker').length >= 1) {
        return $(".datepicker").datepicker();
    }
});

$(function() {
    if ($('.maskmoney').length >= 1) {
        return $(".maskmoney").mask("#.##0,00", {reverse: true});
    }
});
$(function() {
    if ($('.fone').length >= 1) {
        var SPMaskBehavior = function (val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            spOptions = {
                onKeyPress: function(val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                }
            };

        $('.fone').mask(SPMaskBehavior, spOptions);
    }
});