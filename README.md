# nooflab-client-php

Simple PHP binding to the public Nooflab API.

## Example

```
$client = new NoofClient("API_KEY_IS_REQUIRED");
var_dump($client->get_optimal_locations(["00140"], "capital_region"))
```

## Developing

To run this project locally you'll need to build the Docker image and then run it.

**Step 1) build***

```
make build
```

**Step 2) run it in interactive shell**

```
make run
```
