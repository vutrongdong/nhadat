import {
  FETCHING_RESOURCES,
  FETCHING_RESOURCES_DONE,
  FETCHING_RESOURCES_FAIL,
  SET_SETTING,
} from '../mutation-types'

/**
 * Setting state
 */
const state = {
  setting: {}
}

/**
 * Setting actions
 */
const actions = {

  /**
   * Fetch Setting data
   * @param {state}
   */
  async fetchSetting({ commit }) {
    commit(FETCHING_RESOURCES)

    try {
      let setting = await axios.get('/setting')
      commit(FETCHING_RESOURCES_DONE)
      commit(SET_SETTING, setting.data)
    } catch(err) {
      commit(FETCHING_RESOURCES_FAIL, err)
    }
  },

  async pushSetting({ commit }, payload) {
    commit(FETCHING_RESOURCES)
    const { setting, cb } = payload || {}
    try {
      await axios.put('/setting', setting)
      commit(FETCHING_RESOURCES_DONE)
      commit(SET_SETTING, setting)
      cb && cb()
    } catch(err) {
      commit(FETCHING_RESOURCES_FAIL, err)
    }
  }
}

/**
 * Setting mutations
 */
const mutations = {

  /**
   * Set Setting data to state
   */
  [SET_SETTING] (state, setting) {
    state.setting = setting
  }
}

/**
 * Setting getters
 */
const getters = {

  /**
   * Get all Setting
   * @param {state} state
   */
  allSettings (state) {
    return state.setting
  },
}

export default {
  state,
  actions,
  mutations,
  getters
}
