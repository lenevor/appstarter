# Release Notes

## [Version 0.7.3-alpha.7] 

Release Date: Jan 08, 2021

**Next alpha release of Lenevor**

### Added
- Added new methods for allows connection with the database
- Added methods for query builder
- Added new Pipeline class for handle the given exception
- Added methods for finds route to given request

### Changed
- Changed release to 0.7.3
- Changed for variables of database settings
- Changed traits namespace in the `Routing` classes


## [Version 0.7.2-alpha.7] 

Release Date: Aug 01, 2020

**Next alpha release of Lenevor**

### Added
- Added the `Renderable` interface in the `Response` class to automatically trigger the render() method
- Added new method for called to JoinClause class and 'get' method the columns are use an array automatically
- Allows check if given request uri matches given uri method
- Added methods toHtml(), setter and getter for searched to path in `View` class
- Added $router as parameter in __construct in `Lenevor` class
- Added the files list map for call the route of files helpers in `Autoloader` class

### Changed
- Changed release to 0.7.2
- Changed name of the methods 'select' in `ConnectionInterface` interface
- Bug fix in the uri in `Route` class
- Gets a pattern from an array 'where' in `Router` class
- Spacing

### Removed
- Removed property of parameter in `Response` class


## [Version 0.7.1-alpha.7] 

Release Date: Jun 22, 2020

**Next alpha release of Lenevor**

### Added
- Added methods for get parameters for a route in `RouteParamBinding` class
- Added methods for insert and update
- Added methods for process of select statement in the `Builder` class
- Spacing

### Changed
- Changed for release 0.7.1 and extends of interface Renderable
- Changed namespace


## [Version 0.7.0-alpha.7] 

Release Date: May 20, 2020

**Next alpha release of Lenevor**

### Added
- Added alias methods for conditionals of route (host, port, scheme) in the `RouteConditionalTrait` trait
- Generate a Resource instance in `Router` class
- Added function for mapped of arrays in the `RouteMapTrait` trait

### Changed
- Changed release to 0.7.0 and the errors were fixed of syntax in most the classes of routing

### Removed
- Removed method for route resolver in `RouteServiceProvider` class
- Removed conditional of Renderable interface in `RouteResolverTrait` trait