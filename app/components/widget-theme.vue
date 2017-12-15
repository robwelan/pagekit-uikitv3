<template>

    <div class="uk-form-horizontal">

        <div class="uk-form-row">
            <label for="form-theme-panel" class="uk-form-label">{{ 'Panel Style' | trans }}</label>
            <div class="uk-form-controls">
                <select id="form-theme-panel" class="uk-form-width-large" v-model="widget.theme.panel">
                    <option value="">{{ 'None' | trans }}</option>
                    <option value="uk-panel-box">{{ 'Box' | trans }}</option>
                    <option value="uk-panel-box uk-panel-box-primary">{{ 'Box Primary' | trans }}</option>
                    <option value="uk-panel-box uk-panel-box-secondary">{{ 'Box Secondary' | trans }}</option>
                    <option value="uk-panel-header">{{ 'Header' | trans }}</option>
                </select>
            </div>
        </div>

    </div>

</template>

<script>

    module.exports = {

        section: {
            label: 'Theme',
            priority: 90
        },

        props: ['widget', 'config']

    };

    window.Widgets.components['theme'] = module.exports;

</script>
