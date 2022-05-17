{"version":3,"sources":["dropzone-area.js"],"names":["BX","namespace","Kanban","DropZoneArea","grid","options","this","dropZoneType","getDropZoneType","dropZoneTimeout","type","isNumber","layout","container","dropZones","Object","create","dropZonesOrder","prototype","getGrid","addDropZone","getDropZone","id","dropZone","DropZone","Error","setDropZoneArea","getId","targetDropZone","targetId","targetIndex","util","array_search","splice","push","isRendered","render","updateDropZone","setOptions","removeDropZone","dropZoneId","filter","element","dropZoneItems","document","createDocumentFragment","getDropZones","i","length","appendChild","cleanNode","getContainer","getDropZonesCount","className","classFn","Utils","getClass","isFunction","getDropZoneTimeout","attrs","emptyAll","forEach","empty","show","classList","add","hide","unsetActive","remove","setActive"],"mappings":"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","file":""}