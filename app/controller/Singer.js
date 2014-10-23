/*
 * File: app/controller/Singer.js
 *
 * This file was generated by Sencha Architect version 3.1.0.
 * http://www.sencha.com/products/architect/
 *
 * This file requires use of the Sencha Touch 2.4.x library, under independent license.
 * License of Sencha Architect does not include license for Sencha Touch 2.4.x. For more
 * details see http://www.sencha.com/license or contact license@sencha.com.
 *
 * This file will be auto-generated each and everytime you save your project.
 *
 * Do NOT hand edit this file.
 */

Ext.define('MyMusicBox.controller.Singer', {
    extend: 'Ext.app.Controller',

    requires: [
        'MyMusicBox.view.ArtistsView'
    ],

    config: {
        refs: {
            singerNavView: 'mainview #singerNavView'
        },

        control: {
            "mainview #singerNavView #artistCategoryList": {
                itemtap: 'onArtistCategoryListItemTap'
            }
        }
    },

    onArtistCategoryListItemTap: function(dataview, index, target, record, e, eOpts) {
        console.log(record.data);
        var store = Ext.getStore('Artists');
        store.getProxy().setExtraParams({id:record.get('id')});
        store.load();

        // var artistsView =
        this.getSingerNavView().push({
            xtype: 'artistsview',
            title: record.get('text'),
            record: record
        });

    }

});