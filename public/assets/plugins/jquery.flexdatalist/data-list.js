$('.flexdatalist-json').flexdatalist({
     searchContain: false,
     textProperty: '{capital}, {name}, {continent}',
     valueProperty: 'iso2',
     minLength: 1,
     focusFirstResult: true,
     selectionRequired: true,
     groupBy: 'continent',
     visibleProperties: ["name","continent","capital","capital_timezone"],
     searchIn: ["name","continent","capital"],
     data: 'countries.json'
});