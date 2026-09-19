import { readFileSync } from "fs";
import { join } from "path";

const dataPath = join(__dirname, "data.json");
const data = JSON.parse(readFileSync(dataPath, "utf-8"));

export default data;
