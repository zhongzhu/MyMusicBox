/*
 * File: app/view/MainView.js
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

Ext.define('MyMusicBox.view.MainView', {
    extend: 'Ext.tab.Panel',
    alias: 'widget.mainview',

    requires: [
        'Ext.navigation.View',
        'Ext.dataview.List',
        'Ext.XTemplate',
        'Ext.tab.Bar'
    ],

    config: {
        items: [
            {
                xtype: 'navigationview',
                title: '歌手',
                iconCls: 'user',
                itemId: 'singerNavView',
                autoDestroy: false,
                items: [
                    {
                        xtype: 'list',
                        title: '歌手类别',
                        itemId: 'artistCategoryList',
                        itemTpl: [
                            '<div>{text}</div>'
                        ],
                        store: 'ArtistCategory'
                    }
                ]
            },
            {
                xtype: 'container',
                title: '分类',
                iconCls: 'info',
                itemId: 'tab2'
            },
            {
                xtype: 'container',
                title: '播放列表',
                iconCls: 'info',
                itemId: 'tab3'
            },
            {
                xtype: 'container',
                title: '播放',
                iconCls: 'info'
            }
        ],
        tabBar: {
            docked: 'bottom'
        }
    }

});