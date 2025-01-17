layui.define(['jquery'], function (exports) {
    var $ = layui.$;
    'use strict';
    if (typeof ChineseDistricts === 'undefined') {
        throw new Error('The file "city-picker.data.js" must be included first!');
    }
    var NAMESPACE = 'citypicker';
    var EVENT_CHANGE = 'change.' + NAMESPACE;
    var PROVINCE = 'province_code';
    var CITY = 'city_code';
    var DISTRICT = 'district_code';

    // 城市选择类
    var CityPicker = function (element, options) {
        this.$element = $(element);
        this.$dropdown = null;
        this.options = $.extend({}, CityPicker.DEFAULTS, $.isPlainObject(options) && options);
        this.active = false;
        this.dems = [];
        this.needBlur = false;
        this.init();
    };

    CityPicker.prototype = {
        constructor: CityPicker,
        init: function () {
            this.defineDems();
            this.render();
            this.bind();
            this.active = true;
            var _this = this;

            $(".icon_ca").on('click', function () {
                $("#" + PROVINCE).val();
                $("#" + CITY).val();
                $("#" + DISTRICT).val();
                _this.reset();
            });

            if(this.options.province_code) {
                $("#" + PROVINCE).val(this.options.province_code);
                // alert(this.options.province_code)
                var item = $('.province_code a[data-code=' + this.options.province_code + ']');
                item.addClass('active');
                $('.province_code').data('item', {code: this.options.province_code, name: item.html()});
                this.output(CITY)
            }

            if(this.options.city_code) {
                $("#" + CITY).val(this.options.city_code);
                // alert(this.options.province_code)
                var item = $('.city_code a[data-code=' + this.options.city_code + ']');
                item.addClass('active');
                $('.city_code').data('item', {code: this.options.city_code, name: item.html()});
                this.output(DISTRICT)
            }

            if(this.options.district_code) {
                $("#" + DISTRICT).val(this.options.district_code);
                // alert(this.options.province_code)
                var item = $('.district_code a[data-code=' + this.options.district_code + ']');
                item.addClass('active');
                $('.district_code').data('item', {code: this.options.district_code, name: item.html()});
            }

            $(this).trigger(EVENT_CHANGE);
            this.feedText();
            this.feedVal();

        },

        render: function () {
            var p = this.getPosition(),
                placeholder = this.$element.attr('placeholder') || this.options.placeholder,
                textspan = '<span class="city-picker-span" style="' +
                    this.getWidthStyle(p.width) + 'height:' +
                    (p.height - 2) + 'px;line-height:' + (p.height - 1) + 'px;">' +
                    (placeholder ? '<span class="placeholder">' + placeholder + '</span>' : '') +
                    '<span class="title"></span><div class="arrow"></div>' + '<i class="icon_ca"></i></span>',

                dropdown = '<div class="city-picker-dropdown" style="left:0px;top:100%;' +
                    this.getWidthStyle(p.width, true) + '">' +
                    '<div class="city-select-wrap">' +
                    '<div class="city-select-tab">' +
                    '<a class="active" data-type="' + PROVINCE + '">省份</a>' +
                    (this.includeDem(CITY) ? '<a data-type="' + CITY + '">城市</a>' : '') +
                    (this.includeDem(DISTRICT) ? '<a data-type="' + DISTRICT + '">区县</a>' : '') + '</div>' +
                    '<div class="city-select-content">' +
                    '<div class="city-select province ' + PROVINCE + '" data-type="' + PROVINCE + '"></div>' +
                    (this.includeDem(CITY) ? '<div class="city-select ' + CITY + '" data-type="' + CITY + '"></div>' : '') +
                    (this.includeDem(DISTRICT) ? '<div class="city-select ' + DISTRICT + '" data-type="' + DISTRICT + '"></div>' : '') +
                    '</div></div>';

            this.$element.addClass('city-picker-input');
            this.$textspan = $(textspan).insertAfter(this.$element);
            this.$dropdown = $(dropdown).insertAfter(this.$textspan);
            var $select = this.$dropdown.find('.city-select');

            // setup this.$province, this.$city and/or this.$district object
            $.each(this.dems, $.proxy(function (i, type) {
                this['$' + type] = $select.filter('.' + type + '');
            }, this));

            this.refresh();
        },

        refresh: function (force) {
            // clean the data-item for each $select
            var $select = this.$dropdown.find('.city-select');
            $select.data('item', null);
            // parse value from value of the target $element
            var val = this.$element.val() || '';
            val = val.split('/');
            $.each(this.dems, $.proxy(function (i, type) {
                if (val[i] && i < val.length) {
                    this.options[type] = val[i];
                } else if (force) {
                    this.options[type] = '';
                }
                this.output(type);
            }, this));
            this.tab(PROVINCE);
            this.feedText();
            this.feedVal();
        },

        defineDems: function () {
            var stop = false;
            PROVINCE = this.options.province_widget_name || 'province_code';
            CITY = this.options.city_widget_name || 'city_code';
            DISTRICT = this.options.district_widget_name || 'district_code';

            $.each([PROVINCE, CITY, DISTRICT], $.proxy(function (i, type) {
                if (!stop) {
                    this.dems.push(type);
                }
                if (type === this.options.level) {
                    stop = true;
                }
            }, this));
        },

        includeDem: function (type) {
            return $.inArray(type, this.dems) !== -1;
        },

        getPosition: function () {
            var p, h, w, s, pw;
            p = this.$element.position();
            s = this.getSize(this.$element);
            h = s.height;
            w = s.width;
            if (this.options.responsive) {
                pw = this.$element.offsetParent().width();
                if (pw) {
                    w = w / pw;
                    if (w > 0.99) {
                        w = 1;
                    }
                    w = w * 100 + '%';
                }
            }

            return {
                top: p.top || 0,
                left: p.left || 0,
                height: h,
                width: w
            };
        },

        getSize: function ($dom) {
            var $wrap, $clone, sizes;
            if (!$dom.is(':visible')) {
                $wrap = $("<div />").appendTo($("body"));
                $wrap.css({
                    "position": "absolute !important",
                    "visibility": "hidden !important",
                    "display": "block !important"
                });

                $clone = $dom.clone().appendTo($wrap);

                sizes = {
                    width: $clone.outerWidth(),
                    height: $clone.outerHeight()
                };

                $wrap.remove();
            } else {
                sizes = {
                    width: $dom.outerWidth(),
                    height: $dom.outerHeight()
                };
            }

            return sizes;
        },

        getWidthStyle: function (w, dropdown) {
            if (this.options.responsive && !$.isNumeric(w)) {
                return 'width:' + w + ';';
            } else {
                return 'width:' + (dropdown ? Math.max(320, w) : w) + 'px;';
            }
        },

        bind: function () {
            var $this = this;

            $(document).on('click', (this._mouteclick = function (e) {
                var $target = $(e.target);
                var $dropdown, $span, $input;
                if ($target.is('.city-picker-span')) {
                    $span = $target;
                } else if ($target.is('.city-picker-span *')) {
                    $span = $target.parents('.city-picker-span');
                }
                if ($target.is('.city-picker-input')) {
                    $input = $target;
                }
                if ($target.is('.city-picker-dropdown')) {
                    $dropdown = $target;
                } else if ($target.is('.city-picker-dropdown *')) {
                    $dropdown = $target.parents('.city-picker-dropdown');
                }
                if ((!$input && !$span && !$dropdown) ||
                    ($span && $span.get(0) !== $this.$textspan.get(0)) ||
                    ($input && $input.get(0) !== $this.$element.get(0)) ||
                    ($dropdown && $dropdown.get(0) !== $this.$dropdown.get(0))) {
                    $this.close(true);
                }

            }));

            this.$element.on('change', (this._changeElement = $.proxy(function () {
                this.close(true);
                this.refresh(true);
            }, this))).on('focus', (this._focusElement = $.proxy(function () {
                this.needBlur = true;
                this.open();
            }, this))).on('blur', (this._blurElement = $.proxy(function () {
                if (this.needBlur) {
                    this.needBlur = false;
                    this.close(true);
                }
            }, this)));

            this.$textspan.on('click', function (e) {
                var $target = $(e.target), type;
                $this.needBlur = false;
                if ($target.is('.select-item')) {
                    type = $target.data('type');
                    $this.open(type);
                } else {
                    if ($this.$dropdown.is(':visible')) {
                        $this.close();
                    } else {
                        $this.open();
                    }
                }
            }).on('mousedown', function () {
                $this.needBlur = false;
            });

            this.$dropdown.on('click', '.city-select a', function () {
                var $select = $(this).parents('.city-select');
                var $active = $select.find('a.active');
                var last = $select.next().length === 0;
                $active.removeClass('active');
                $(this).addClass('active');
                if ($active.data('code') !== $(this).data('code')) {
                    $select.data('item', {
                        name: $(this).attr('title'), code: $(this).data('code')
                    });
                    $(this).trigger(EVENT_CHANGE);
                    $this.feedText();
                    $this.feedVal();
                    if (last) {
                        $this.close();
                    }
                }
            }).on('click', '.city-select-tab a', function () {
                if (!$(this).hasClass('active')) {
                    var type = $(this).data('type');
                    $this.tab(type);
                }
            }).on('mousedown', function () {
                $this.needBlur = false;
            });
            if (this['$' + PROVINCE]) {
                this['$' + PROVINCE].on(EVENT_CHANGE, (this._changeProvince = $.proxy(function () {
                    this.output(CITY);
                    this.output(DISTRICT);
                    this.tab(CITY);
                }, this)));
            }

            if (this['$' + CITY]) {
                this['$' + CITY].on(EVENT_CHANGE, (this._changeCity = $.proxy(function () {
                    this.output(DISTRICT);
                    this.tab(DISTRICT);
                }, this)));
            }
        },

        open: function (type) {
            type = type || PROVINCE;
            this.$dropdown.show();
            this.$textspan.addClass('open').addClass('focus');
            this.tab(type);
        },

        close: function (blur) {
            this.$dropdown.hide();
            this.$textspan.removeClass('open');
            if (blur) {
                this.$textspan.removeClass('focus');
            }
        },

        unbind: function () {

            $(document).off('click', this._mouteclick);

            this.$element.off('change', this._changeElement);
            this.$element.off('focus', this._focusElement);
            this.$element.off('blur', this._blurElement);

            this.$textspan.off('click');
            this.$textspan.off('mousedown');

            this.$dropdown.off('click');
            this.$dropdown.off('mousedown');

            if (this['$' + PROVINCE]) {
                this['$' + PROVINCE].off(EVENT_CHANGE, this._changeProvince);
            }

            if (this.$city) {
                this.$city.off(EVENT_CHANGE, this._changeCity);
            }
        },
        // 动态添加的input无法删除，切换请求有问题
        getText: function () {
            var text = '';
            var $this = this;
            this.$dropdown.find('.city-select')
                .each(function () {
                    var item = $(this).data('item'),
                        type = $(this).data('type');
                    if (item && item.name) {
                        text += ($(this).hasClass('province') ? '' : '/') + '<span class="select-item" data-type="' +
                            type + '" data-code="' + item.code + '">' + $this.getName(item.name, type) + '</span><input type="hidden" id="' + type + '" name="' + type + '" value="' + item.code + '"  />';
                    }
                });
            return text;
        },

        getPlaceHolder: function () {
            return this.$element.attr('placeholder') || this.options.placeholder;
        },

        feedText: function () {
            var text = this.getText();
            // debugger;
            if (text) {
                this.$textspan.find('>.placeholder').hide();
                // this.$textspan.find('>.title').siblings('input').val('');
                //this.$textspan.find('>.title').children().remove();
                this.$textspan.find('>.title').children("input").val('');
                this.$textspan.find('>.title').html(this.getText()).show();
            } else {

                this.$textspan.find('>.placeholder').text(this.getPlaceHolder()).show();
                this.$textspan.find('>.title').html('').hide();
            }
        },

        getVal: function () {
            var text = '';
            this.$dropdown.find('.city-select')
                .each(function () {
                    var item = $(this).data('item');
                    if (item) {
                        text += ($(this).hasClass('province') ? '' : '/') + item.name;
                    }
                });
            return text;
        },

        feedVal: function () {
            this.$element.val(this.getVal());
        },

        output: function (type) {
            var options = this.options;
            //var placeholders = this.placeholders;
            var $select = this['$' + type];
            var data = type === PROVINCE ? {} : [];
            var item;
            var districts;
            var code;
            var matched = null;
            var value;

            if (!$select || !$select.length) {
                return;
            }

            item = $select.data('item');

            value = (item ? item.name : null) || options[type];

            code = (
                type === PROVINCE ? 86 :
                    type === CITY ? this['$' + PROVINCE] && this['$' + PROVINCE].find('.active').data('code') :
                        type === DISTRICT ? this['$' + CITY] && this['$' + CITY].find('.active').data('code') : code
            );

            districts = $.isNumeric(code) ? ChineseDistricts[code] : null;

            if ($.isPlainObject(districts)) {
                $.each(districts, function (code, name) {
                    var provs;
                    if (type === PROVINCE) {
                        provs = [];
                        for (var i = 0; i < name.length; i++) {
                            if (name[i].name === value) {
                                matched = {
                                    code: name[i].code,
                                    name: name[i].name
                                };
                            }
                            provs.push({
                                code: name[i].code,
                                name: name[i].name,
                                selected: name[i].name === value
                            });
                        }
                        data[code] = provs;
                    } else {
                        if (name === value) {
                            matched = {
                                code: code,
                                name: name
                            };
                        }
                        data.push({
                            code: code,
                            name: name,
                            selected: name === value
                        });
                    }
                });
            }
            $select.html(type === PROVINCE ? this.getProvinceList(data) :
                this.getList(data, type));
            $select.data('item', matched);
        },

        getProvinceList: function (data) {
            var list = [],
                $this = this;

            $.each(data, function (i, n) {
                list.push('<dl class="clearfix">');
                list.push('<dt>' + i + '</dt><dd>');
                $.each(n, function (j, m) {
                    list.push(
                        '<a' +
                        ' title="' + (m.name || '') + '"' +
                        ' data-code="' + (m.code || '') + '"' +
                        ' class="' +
                        (m.selected ? ' active' : '') +
                        '">' + $this.getName(m.name, PROVINCE) +
                        '</a>');
                });
                list.push('</dd></dl>');
            });

            return list.join('');
        },

        getList: function (data, type) {
            var list = [],
                $this = this;
            list.push('<dl class="clearfix"><dd>');

            $.each(data, function (i, n) {
                list.push(
                    '<a' +
                    ' title="' + (n.name || '') + '"' +
                    ' data-code="' + (n.code || '') + '"' +
                    ' data-type="' + type + '"' +
                    ' class="' +
                    (n.selected ? ' active' : '') +
                    '">' + $this.getName(n.name, type) +
                    '</a>');
            });
            list.push('</dd></dl>');

            return list.join('');
        },

        getName: function(name, type) {
            return this.options.simple ? this.simplize(name, type) : name;
        },

        simplize: function (name, type) {
            name = name || '';
            if (type === PROVINCE) {
                return name.replace(/[省,市,自治区,壮族,回族,维吾尔]/g, '');
            } else if (type === CITY) {
                return name.replace(/[市,地区,回族,蒙古,苗族,白族,傣族,景颇族,藏族,彝族,壮族,傈僳族,布依族,侗族]/g, '')
                    .replace('哈萨克', '').replace('自治州', '').replace(/自治县/, '');
            } else if (type === DISTRICT) {
                return name.length > 2 ? name.replace(/[市,区,县,旗]/g, '') : name;
            }
        },

        tab: function (type) {
            var $selects = this.$dropdown.find('.city-select');
            var $tabs = this.$dropdown.find('.city-select-tab > a');
            var $select = this['$' + type];
            var $tab = this.$dropdown.find('.city-select-tab > a[data-type="' + type + '"]');
            if ($select) {
                $selects.hide();
                $select.show();
                $tabs.removeClass('active');
                $tab.addClass('active');
            }
        },

        reset: function () {
            this.$element.val(null).trigger('change');
        },

        destroy: function () {
            this.unbind();
            this.$element.removeData(NAMESPACE).removeClass('city-picker-input');
            this.$textspan.remove();
            this.$dropdown.remove();
        },

        pick: function (data) {
            $("#" + PROVINCE).val();
            $("#" + CITY).val();
            $("#" + DISTRICT).val();
            this.reset();

            if(data.province_code) {
                $("#" + PROVINCE).val(data.province_code);
                // alert(data.province_code)
                var item = $('.province_code a[data-code=' + data.province_code + ']');
                item.addClass('active');
                $('.province_code').data('item', {code: data.province_code, name: item.html()});
                this.output(CITY)
            }

            if(data.city_code) {
                $("#" + CITY).val(data.city_code);
                // alert(data.province_code)
                var item = $('.city_code a[data-code=' + data.city_code + ']');
                item.addClass('active');
                $('.city_code').data('item', {code: data.city_code, name: item.html()});
                this.output(DISTRICT)
            }

            if(data.district_code) {
                $("#" + DISTRICT).val(data.district_code);
                // alert(data.province_code)
                var item = $('.district_code a[data-code=' + data.district_code + ']');
                item.addClass('active');
                $('.district_code').data('item', {code: data.district_code, name: item.html()});
            }

            $(this).trigger(EVENT_CHANGE);
            this.feedText();
            this.feedVal();
        }
    };

    // 默认值和参数
    CityPicker.DEFAULTS = {
        simple: false,
        responsive: false,
        placeholder: '请选择地区',
        level: 'district',// 级别

        province_widget_name: '',//input hidden 的 name 值
        city_widget_name: '',//input hidden 的 name 值
        district_widget_name: '',//input hidden 的值

        province_code: '',// 默认省份编号
        city_code: '',// 默认地市编号
        district_code: ''// 默认区县编号
    };

    CityPicker.setDefaults = function (options) {
        $.extend(CityPicker.DEFAULTS, options);
    };

    // Save the other citypicker
    CityPicker.other = $.fn.citypicker;

    // Register as jQuery plugin
    $.fn.citypicker = function (option) {
        var args = [].slice.call(arguments, 1);
        return this.each(function () {
            var $this = $(this);
            var data = $this.data(NAMESPACE);
            var options;
            var fn;
            if (!data) {
                if (/destroy/.test(option)) {
                    return;
                }
                options = $.extend({}, $this.data(), $.isPlainObject(option) && option);
                $this.data(NAMESPACE, (data = new CityPicker(this, options)));
            }
            if (typeof option === 'string' && $.isFunction(fn = data[option])) {
                fn.apply(data, args);
            }
        });
    };

    $.fn.citypicker.Constructor = CityPicker;
    $.fn.citypicker.setDefaults = CityPicker.setDefaults;

    // No conflict
    $.fn.citypicker.noConflict = function () {
        $.fn.citypicker = CityPicker.other;
        return this;
    };

  
    //$(function () {
    //    $('[data-toggle="city-picker"]').citypicker();
    //});


    exports('citypicker', CityPicker);
});