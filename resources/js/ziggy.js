const Ziggy = {"url":"http:\/\/localhost:60000","port":60000,"defaults":{},"routes":{"sanctum.csrf-cookie":{"uri":"sanctum\/csrf-cookie","methods":["GET","HEAD"]},"moonshine.login":{"uri":"admin\/login","methods":["GET","HEAD"]},"moonshine.authenticate":{"uri":"admin\/authenticate","methods":["POST"]},"moonshine.logout":{"uri":"admin\/logout","methods":["GET","HEAD"]},"moonshine.profile.store":{"uri":"admin\/profile","methods":["POST"]},"moonshine.index":{"uri":"admin","methods":["GET","HEAD"]},"moonshine.update-field.through-column":{"uri":"admin\/update-field\/column\/{resourceUri}\/{resourceItem}","methods":["PUT"],"parameters":["resourceUri","resourceItem"]},"moonshine.update-field.through-relation":{"uri":"admin\/update-field\/relation\/{resourceUri}\/{pageUri}\/{resourceItem}","methods":["PUT"],"parameters":["resourceUri","pageUri","resourceItem"]},"moonshine.async-search":{"uri":"admin\/async-search\/{pageUri}\/{resourceUri?}\/{resourceItem?}","methods":["GET","HEAD"],"parameters":["pageUri","resourceUri","resourceItem"]},"moonshine.notifications.readAll":{"uri":"admin\/notifications","methods":["GET","HEAD"]},"moonshine.notifications.read":{"uri":"admin\/notifications\/{notification}","methods":["GET","HEAD"],"parameters":["notification"]},"moonshine.component":{"uri":"admin\/component\/{pageUri}\/{resourceUri?}","methods":["GET","HEAD"],"parameters":["pageUri","resourceUri"]},"moonshine.method":{"uri":"admin\/method\/{pageUri}\/{resourceUri?}","methods":["GET","HEAD","POST","PUT","PATCH","DELETE","OPTIONS"],"parameters":["pageUri","resourceUri"]},"moonshine.reactive":{"uri":"admin\/reactive\/{pageUri}\/{resourceUri?}\/{resourceItem?}","methods":["POST"],"parameters":["pageUri","resourceUri","resourceItem"]},"moonshine.has-many.form":{"uri":"admin\/has-many\/form\/{pageUri}\/{resourceUri?}\/{resourceItem?}","methods":["GET","HEAD"],"parameters":["pageUri","resourceUri","resourceItem"]},"moonshine.has-many.list":{"uri":"admin\/has-many\/list\/{pageUri}\/{resourceUri?}\/{resourceItem?}","methods":["GET","HEAD"],"parameters":["pageUri","resourceUri","resourceItem"]},"moonshine.page":{"uri":"admin\/page\/{pageUri}","methods":["GET","HEAD"],"parameters":["pageUri"]},"moonshine.crud.massDelete":{"uri":"admin\/resource\/{resourceUri}\/crud","methods":["DELETE"],"parameters":["resourceUri"]},"moonshine.crud.index":{"uri":"admin\/resource\/{resourceUri}\/crud","methods":["GET","HEAD"],"parameters":["resourceUri"]},"moonshine.crud.create":{"uri":"admin\/resource\/{resourceUri}\/crud\/create","methods":["GET","HEAD"],"parameters":["resourceUri"]},"moonshine.crud.store":{"uri":"admin\/resource\/{resourceUri}\/crud","methods":["POST"],"parameters":["resourceUri"]},"moonshine.crud.show":{"uri":"admin\/resource\/{resourceUri}\/crud\/{resourceItem}","methods":["GET","HEAD"],"parameters":["resourceUri","resourceItem"]},"moonshine.crud.edit":{"uri":"admin\/resource\/{resourceUri}\/crud\/{resourceItem}\/edit","methods":["GET","HEAD"],"parameters":["resourceUri","resourceItem"]},"moonshine.crud.update":{"uri":"admin\/resource\/{resourceUri}\/crud\/{resourceItem}","methods":["PUT","PATCH"],"parameters":["resourceUri","resourceItem"]},"moonshine.crud.destroy":{"uri":"admin\/resource\/{resourceUri}\/crud\/{resourceItem}","methods":["DELETE"],"parameters":["resourceUri","resourceItem"]},"moonshine.handler":{"uri":"admin\/resource\/{resourceUri}\/handler\/{handlerUri}","methods":["GET","HEAD","POST","PUT","PATCH","DELETE","OPTIONS"],"parameters":["resourceUri","handlerUri"]},"moonshine.resource.page":{"uri":"admin\/resource\/{resourceUri}\/{pageUri}\/{resourceItem?}","methods":["GET","HEAD"],"parameters":["resourceUri","pageUri","resourceItem"]},"news.index":{"uri":"news","methods":["GET","HEAD"]},"news.detail":{"uri":"news\/{news}","methods":["GET","HEAD"],"parameters":["news"]},"storage.local":{"uri":"storage\/{path}","methods":["GET","HEAD"],"wheres":{"path":".*"},"parameters":["path"]},"moonshine.":{"uri":"admin\/{fallbackPlaceholder}","methods":["GET","HEAD"],"wheres":{"fallbackPlaceholder":".*"},"parameters":["fallbackPlaceholder"]}}};
if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
  Object.assign(Ziggy.routes, window.Ziggy.routes);
}
export { Ziggy };
