var meta = [],
    og = [];

function render(type, content) {
    var block = $('#' + type + '_block');
    block.text('');
    content.map((e, key) => {
        block.append(`
                    <div data-id="${key}" data-type="${type}" class="alert alert-secondary">
                        Название: ${e.name}; Контент: ${e.content};
                    </div>
                `)
    })
}

function remove(type, id) {
    if (type === 'og') {
        og.splice(id, 1)
        render(type, og)
    } else {
        meta.splice(id, 1)
        render(type, meta)
    }
}

$('.gap__flex').on('click', '.alert', function () {
    let type = $(this).attr('data-type'),
        id = $(this).attr('data-id');
    remove(type, id);
})

$('.startFunc').on('click', function () {
    let obj = {},
        type = $(this).attr('data-type'),
        lang = $(this).attr('data-lang'),
        name = $('#' + lang + type + '_name'),
        content = $('#' + lang + type + '_content');

    obj.name = name.val();
    obj.content = content.val();

    if (type === 'og') {
        og.push(obj)
        $('#' + type + '_tags').val(JSON.stringify(og))
        render(type, og)
    } else {
        meta.push(obj)
        $('#' + type + '_tags').val(JSON.stringify(meta))
        render(type, meta)
    }
    name.val('');
    content.val('');
});

var pt_meta = [],
    pt_og = [];

function pt_render(type, content) {
    var block = $('#pt_' + type + '_block');
    block.text('');
    content.map((e, key) => {
        block.append(`
                    <div data-id="${key}" data-type="${type}" class="alert alert-secondary">
                        Название: ${e.name}; Контент: ${e.content};
                    </div>
                `)
    })
}

function pt_remove(type, id) {
    if (type === 'og') {
        pt_og.splice(id, 1)
        pt_render(type, pt_og)
    } else {
        pt_meta.splice(id, 1)
        pt_render(type, pt_meta)
    }
}

$('.pt_gap__flex').on('click', '.alert', function () {
    let type = $(this).attr('data-type'),
        id = $(this).attr('data-id');
    pt_remove(type, id);
})

$('.pt_startFunc').on('click', function () {
    let obj = {},
        type = $(this).attr('data-type'),
        name = $('#pt_' + type + '_name'),
        content = $('#pt_' + type + '_content');

    obj.name = name.val();
    obj.content = content.val();

    if (type === 'og') {
        pt_og.push(obj)
        $('#pt_' + type + '_tags').val(JSON.stringify(pt_og))
        pt_render(type, pt_og)
    } else {
        pt_meta.push(obj)
        $('#pt_' + type + '_tags').val(JSON.stringify(pt_meta))
        pt_render(type, pt_meta)
    }
    name.val('');
    content.val('');
});

$('#title').on('input', function (){
    $('#og_title').val($(this).val())
})
$('#description').on('input', function (){
    $('#og_description').val($(this).val())
})
$('#pt_title').on('input', function (){
    $('#pt_og_title').val($(this).val())
})
$('#pt_description').on('input', function (){
    $('#pt_og_description').val($(this).val())
})

function createLink ( str ) {
    var ru = {
        'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd',
        'е': 'e', 'ё': 'e', 'ж': 'j', 'з': 'z', 'и': 'i',
        'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n', 'о': 'o',
        'п': 'p', 'р': 'r', 'с': 's', 'т': 't', 'у': 'u',
        'ф': 'f', 'х': 'h', 'ц': 'c', 'ч': 'ch', 'ш': 'sh',
        'щ': 'shch', 'ы': 'y', 'э': 'e', 'ю': 'u', 'я': 'ya'
    }, n_str = [];
    str = str.replace(/[ъь]+/g, '').replace(/й/g, 'i');
    for ( var i = 0; i < str.length; ++i ) {
        n_str.push(
            ru[ str[i] ]
            || ru[ str[i].toLowerCase() ] === undefined && str[i]
            || ru[ str[i].toLowerCase() ].replace(/^(.)/, function ( match ) { return match.toUpperCase() })
        );
    }
    return n_str.join('');
}
