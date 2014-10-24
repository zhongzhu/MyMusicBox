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
        'MyMusicBox.view.ArtistsView',
        'Ext.ActionSheet',
        'Ext.MessageBox'
    ],

    config: {
        refs: {
            singerNavView: 'mainview #singerNavView'
        },

        control: {
            "mainview #singerNavView #artistCategoryList": {
                itemtap: 'onArtistCategoryListItemTap'
            },
            "artistsview": {
                itemtap: 'onArtistListItemTap'
            },
            "songsview": {
                itemtap: 'onSongListItemTap'
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

    },

    onArtistListItemTap: function(dataview, index, target, record, e, eOpts) {
        console.log(record.data);
        var store = Ext.getStore('Songs');
        store.getProxy().setExtraParams({id:record.get('id')});
        store.load();

        this.getSingerNavView().push({
            xtype: 'songsview',
            title: record.get('name') + '的歌',
            record: record
        });
    },

    onSongListItemTap: function(dataview, index, target, record, e, eOpts) {
        console.log(record.data);
        var actionSheet = Ext.create('Ext.ActionSheet', {
                    items: [
                        {
                            text: '添加到播放列表',
                            ui  : 'action',
                            handler: function(button, e, eOpts) {
                                var d = actionSheet.getRecord().getData(),
                                store = Ext.getStore('Playlist'),
                                songId = d.id;

                                if (store.find('original_id', songId) != -1) {
                                    Ext.Msg.alert('不需要重复添加', '你的播放列表已经添加过这首歌了。');
                                } else {
                                    var r = Ext.create('MyMusicBox.model.Playlist', d);
                                    r.set('original_id', songId);
                                    delete r.data.id;
                                    store.add(r);
                                    store.sync();
                                }

                                actionSheet.hide();
                            }
                        },
                        {
                            text: '取消',
                            ui  : 'confirm',
                            handler: function() {actionSheet.hide();}
                        }
                    ]
                });

        actionSheet.setRecord(record);
        Ext.Viewport.add(actionSheet);
        actionSheet.show();
    }

});